<?php


namespace TopConcepts\Klarna\Core;


use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Core\Registry;

class KlarnaShopControl extends KlarnaShopControl_parent
{

    protected function _initializeViewObject($sClass, $sFunction, $aParams = null, $aViewsChain = null)
    {
        // detect paypal button clicks
        $searchTerm = 'paypalExpressCheckoutButton';
        $found      = array_filter(array_keys($_REQUEST), function ($paramName) use ($searchTerm) {
            return strpos($paramName, $searchTerm) !== false;
        });
        // remove KCO id from session
        if ((bool)$found) {
            Registry::getSession()->deleteVariable('klarna_checkout_order_id');
            KlarnaUtils::log('debug', 'Paypal button usage detected: ' . json_encode($found, 128));
        }

        return parent::_initializeViewObject($sClass, $sFunction, $aParams, $aViewsChain);
    }

    protected function executeAction($view, $functionName)
    {
        //logout User and Reset Session if user is Fake-User and if customer leaves checkout
        if (
            KlarnaUtils::isKlarnaCheckoutEnabled() &&
            Registry::getSession()->getVariable("blNeedLogout") &&
            !Registry::getSession()->getVariable("klarnaLoggedInNaturally") &&
            !$this->isCheckoutController()
        ) {
            KlarnaUtils::fullyResetKlarnaSession();
        }

        // Logout and delete fake user if user is KEX fake-user and if customer leaves checkout
        if (
            ($userToDeleteFakeId = Registry::getSession()->getVariable("kexFakeUserId")) &&
            !$this->isCheckoutController()
        ) {
            $userToDelete = oxNew(User::class);
            $userToDelete->load($userToDeleteFakeId);
            $userToDelete->delete();

            KlarnaUtils::fullyResetKlarnaSession();
        }

        parent::executeAction($view, $functionName);
    }

    protected function isCheckoutController(): bool
    {
        $sController = $this->getConfig()->getTopActiveView()->getClassName();

        return in_array($sController, [
            'klarnaexpress',
            'order',
            'thankyou',
            'ajaxpay',
            'oscpaypalproxy',
            'makaira_connect_endpoint',
            'tpl',
            'oepaypalstandarddispatcher',
            'content'
        ]);
    }

}
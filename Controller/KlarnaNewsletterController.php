<?php
/**
 * Copyright 2018 Klarna AB
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TopConcepts\Klarna\Controller;

use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Registry;

class KlarnaNewsletterController extends KlarnaNewsletterController_parent
{
    /**
     *
     * Checks for newsletter subscriber data, if OK - creates new user as
     * subscriber or assigns existing user to newsletter group and sends
     * confirmation email.
     *
     * Template variables:
     * <b>success</b>, <b>error</b>, <b>aRegParams</b>
     *
     * @return bool
     */
    public function send()
    {
        $aParams = Registry::getConfig()->getRequestParameter("editval");

        // loads submited values
        $this->_aRegParams = $aParams;

        if (!$aParams['oxuser__oxusername']) {
            Registry::getUtilsView()->addErrorToDisplay('ERROR_MESSAGE_COMPLETE_FIELDS_CORRECTLY');

            return;
        } elseif (!oxNew(\OxidEsales\Eshop\Core\MailValidator::class)->isValidEmail($aParams['oxuser__oxusername'])) {
            // #1052C - eMail validation added
            Registry::getUtilsView()->addErrorToDisplay('MESSAGE_INVALID_EMAIL');

            return;
        }

        $blSubscribe = Registry::getConfig()->getRequestParameter("subscribeStatus");

        $oUser = oxNew(\OxidEsales\Eshop\Application\Model\User::class);
        $oUser->oxuser__oxusername = new Field($aParams['oxuser__oxusername'], Field::T_RAW);

        /**
         * Klarna modification: The original OXID User::exists() method implements a username check that should not be there.
         * For KCO to work, this username check was removed and has to be implemented separately here for the Newsletter to work.
         */
        // if such user does not exist
        if (!$oUser->exists() && !$oUser->userExistsByMail()) {
            // and subscribe is off - error, on - create
            if (!$blSubscribe) {
                Registry::getUtilsView()->addErrorToDisplay('NEWSLETTER_EMAIL_NOT_EXIST');

                return;
            } else {
                $oUser->oxuser__oxactive = new Field(1, Field::T_RAW);
                $oUser->oxuser__oxrights = new Field('user', Field::T_RAW);
                $oUser->oxuser__oxshopid = new Field($this->getConfig()->getShopId(), Field::T_RAW);
                $oUser->oxuser__oxfname = new Field($aParams['oxuser__oxfname'], Field::T_RAW);
                $oUser->oxuser__oxlname = new Field($aParams['oxuser__oxlname'], Field::T_RAW);
                $oUser->oxuser__oxsal = new Field($aParams['oxuser__oxsal'], Field::T_RAW);
                $oUser->oxuser__oxcountryid = new Field($aParams['oxuser__oxcountryid'], Field::T_RAW);
                $blUserLoaded = $oUser->save();
            }
        } else {
            $blUserLoaded = $oUser->load($oUser->getId());
        }


        // if user was added/loaded successfully and subscribe is on - subscribing to newsletter
        if ($blSubscribe && $blUserLoaded) {
            //removing user from subscribe list before adding
            $oUser->setNewsSubscription(false, false);

            $blOrderOptInEmail = $this->getConfig()->getConfigParam('blOrderOptInEmail');
            if ($oUser->setNewsSubscription(true, $blOrderOptInEmail)) {
                // done, confirmation required?
                if ($blOrderOptInEmail) {
                    $this->_iNewsletterStatus = 1;
                } else {
                    $this->_iNewsletterStatus = 2;
                }
            } else {
                Registry::getUtilsView()->addErrorToDisplay('MESSAGE_NOT_ABLE_TO_SEND_EMAIL');
            }
        } elseif (!$blSubscribe && $blUserLoaded) {
            // unsubscribing user
            $oUser->setNewsSubscription(false, false);
            $this->_iNewsletterStatus = 3;
        }
    }
}
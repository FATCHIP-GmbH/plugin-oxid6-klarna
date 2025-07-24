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

use TopConcepts\Klarna\Model\KlarnaUser;
use OxidEsales\Eshop\Application\Controller\FrontendController;
use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Core\Registry;

class KlarnaDeviceEligibilityController extends FrontendController
{

    /**
     * @var string
     */
    protected $_sThisTemplate = null;

    /** @var User|KlarnaUser */
    protected $_oUser;


    /** @var array */
    protected $_aOrderData;

    /** @var \Exception[] */
    protected $_aErrors;

    public function setKcoApplePayDeviceEligibility()
    {
        $isEligible = Registry::getRequest()->getRequestParameter("isEligible");

        $oSession = Registry::getSession();
        $oSession->setVariable("kcoApplePayDeviceEligible", $isEligible);

        $this->setValidResponseHeader(200, "OK");
    }

    /**
     * @codeCoverageIgnore
     * @param $responseStatus
     * @param $responseText
     * @return bool
     */
    protected function setValidResponseHeader($responseStatus, $responseText)
    {

        Registry::getUtils()->setHeader("HTTP/1.0 ".$responseStatus." ".$responseText);
        Registry::getUtils()->setHeader("Content-Type: text/html; charset=UTF-8");
        Registry::getUtils()->showMessageAndExit($responseText);

        return true;
    }

}
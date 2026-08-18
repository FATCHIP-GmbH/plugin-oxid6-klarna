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

namespace TopConcepts\Klarna\Model;


use OxidEsales\Eshop\Core\DatabaseProvider;
use TopConcepts\Klarna\Core\KlarnaConsts;
use TopConcepts\Klarna\Core\KlarnaUtils;

class KlarnaCountryList extends KlarnaCountryList_parent
{
    /**
     * Selects and loads all active countries that are assigned to klarna_checkout
     * loads all active countries if none are assigned
     *
     * @param integer $iLang language
     * @param bool $filterKcoList
     */
    public function loadActiveKlarnaCheckoutCountries($iLang = null, $filterKcoList = true)
    {
        $sViewName = getViewName('oxcountry', $iLang);
        $sSelect   = "SELECT {$sViewName}.oxid, {$sViewName}.oxtitle, {$sViewName}.oxisoalpha2 FROM {$sViewName}
                      JOIN oxobject2payment 
                      ON oxobject2payment.oxobjectid = {$sViewName}.oxid
                      WHERE oxobject2payment.oxpaymentid = 'klarna_checkout'
                      AND oxobject2payment.oxtype = 'oxcountry'
                      AND {$sViewName}.oxactive=1";
        $params = [];

        if($filterKcoList === true) {
            $sSelect.= " AND {$sViewName}.oxisoalpha2 IN (";
            foreach (oxNew(KlarnaConsts::class)->getKlarnaGlobalCountries() as $iso) {
                if (!empty($params)) {
                    $sSelect .= ',';
                }
                $sSelect .= '?';
                $params[] = $iso;
            }
            $sSelect .= ")";
        }

        $this->selectString($sSelect, $params);

        if(!count($this)) {
            $sSelect = "SELECT {$sViewName}.oxid, {$sViewName}.oxtitle, {$sViewName}.oxisoalpha2 
                        FROM {$sViewName}
                        WHERE {$sViewName}.oxactive=1";

            $this->selectString($sSelect);
        }
    }

    /**
     * Selects and loads all active countries that are NOT Klarna Global countries
     *
     * @param integer $iLang language
     */
    public function loadActiveNonKlarnaCheckoutCountries($iLang = null)
    {
        $sViewName = getViewName('oxcountry', $iLang);
        $sSelect   = "SELECT oxid, oxtitle, oxisoalpha2 FROM {$sViewName}
                      WHERE oxactive=1 
                      AND (
                          oxisoalpha2 NOT IN (";
                    $params = [];
                    foreach (oxNew(KlarnaConsts::class)->getKlarnaGlobalCountries() as $iso) {
                        if (!empty($params)) {
                            $sSelect .= ',';
                        }
                        $sSelect .= '?';
                        $params[] = $iso;
                    }
                    $sSelect .= ")
                          OR oxid NOT IN (SELECT oxobjectid FROM oxobject2payment WHERE oxpaymentid = 'klarna_checkout')
                      )
                      ORDER BY oxorder, oxtitle";
        $this->selectString($sSelect, $params);
    }

    /**
     * Selects and loads all active countries that are on Klarna's KCO Global list
     * @param null $iLang
     */
    public function loadActiveKCOGlobalCountries($iLang = null)
    {
        $sViewName = getViewName('oxcountry', $iLang);
        $sSelect   = "SELECT {$sViewName}.oxid, {$sViewName}.oxtitle, {$sViewName}.oxisoalpha2 FROM {$sViewName}
                      WHERE {$sViewName}.oxactive=1 
                      AND {$sViewName}.oxisoalpha2 IN (";
        $params = [];
        foreach (oxNew(KlarnaConsts::class)->getKlarnaGlobalCountries() as $iso) {
            if (!empty($params)) {
                $sSelect .= ',';
            }
            $sSelect .= '?';
            $params[] = $iso;
        }
        $sSelect .= ')';
        $this->selectString($sSelect, $params);
    }

    public function getKlarnaCountriesTitles($iLang)
    {
        $sViewName = getViewName('oxcountry', $iLang);
        if (KlarnaUtils::isKlarnaCheckoutEnabled()) {
            $isoList = oxNew(KlarnaConsts::class)->getKustomCoreCountries();
        } else {
            $isoList = oxNew(KlarnaConsts::class)->getKlarnaCoreCountries();
        }
        $isoListPlaceholder = join(', ', array_fill(0, count($isoList), '?'));

        $sSelect = "SELECT oxisoalpha2, oxtitle FROM $sViewName WHERE oxisoalpha2 IN ($isoListPlaceholder)";
        $result = DatabaseProvider::getDb()->select($sSelect, $isoList);

        $aKlarnaCountries = [];
        foreach ($result->fetchAll() as $row) {
            $aKlarnaCountries[$row[0]] = $row[1];
        }
        return $aKlarnaCountries;

    }
}
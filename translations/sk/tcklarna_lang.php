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

$sLangName = "Slovenčina";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Chyba pri kontrole objednávky",
    "TCKLARNA_CHECKOUT" => "Pokladňa",

    "TCKLARNA_DISCOUNT_TITLE" => "Zľava",
    "TCKLARNA_SURCHARGE_TITLE" => "Príplatok",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Zľava na poukaz",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Darčekové balenie",
    "TCKLARNA_GIFT_CARD_TITLE" => "Blahoželanie",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Príplatok za spôsob platby",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Poplatok za ochranu kupujúcich Trusted Shops",

    "TCKLARNA_PASSWORD" => "Heslo",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Ochrana kupujúcich Trusted Shops",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Už ste zákazníkom?",
    "TCKLARNA_LAW_NOTICE" => "Pre prenos údajov platia <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">podmienky používania</a>",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Máte zľavový poukaz?",
    "TCKLARNA_GO_TO_CHECKOUT" => "K pokladni",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Použiť ako doručovaciu adresu",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Vybrať doručovaciu adresu",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Vytvoriť zákaznícky účet",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Odoberať newsletter",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Vytvoriť zákaznícky účet A odoberať newsletter",
    "TCKLARNA_NO_CHECKBOX" => "Nezobrazovať zaškrtávacie políčko",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Doručovacia adresa sa môže líšiť od fakturačnej adresy",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Telefónne číslo je povinné pole v Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Dátum narodenia ako povinné pole",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Vyberte prosím krajinu doručenia:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Nenašli ste svoju krajinu?",
    "TCKLARNA_MORE_COUNTRIES" => "Ďalšie krajiny doručenia",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Moja krajina nie je v zozname",
    "TCKLARNA_OTHER_COUNTRY" => "Iné krajiny",
    "TCKLARNA_RESET_COUNTRY" => "Vaša krajina: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "zmeniť",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Kliknutím na toto tlačidlo spustíte prihlásenie cez Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Pozor!</strong> Údaje tejto objednávky sa líšia od údajov uložených v spoločnosti Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "Objednávka bola stornovaná. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Zobraziť túto objednávku v portáli Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Vyskytla sa chyba. Skúste to prosím znova.",
    "KLARNA_WRONG_URLS_CONFIG" => "Chyba v konfigurácii – skontrolujte adresy URL pre obchodné podmienky a právo na odstúpenie od zmluvy",
    "TCKLARNA_KP_INVALID_TOKEN" => "Neplatný autorizačný token. Skúste to prosím znova.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Údaje o objednávke sa zmenili.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "Ak chcete použiť platobnú metódu Klarna, zvolená mena sa musí zhodovať s oficiálnou menou vašej fakturačnej/doručovacej krajiny.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Chyba konfigurácie: V tejto krajine nie sú k dispozícii žiadne platobné metódy Klarna.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Platba touto metódou Klarna nie je momentálne pre firemné objednávky k dispozícii.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Platba touto metódou Klarna je k dispozícii iba pre objednávky súkromných osôb.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Platba touto metódou Klarna je momentálne k dispozícii iba pre firemné objednávky.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Súhlaste prosím s obchodnými podmienkami a podmienkami odstúpenia od zmluvy pre digitálny obsah.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Nedostatočné množstvo produktu %s na sklade.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Pre túto krajinu nie je momentálne definovaný žiadny spôsob dopravy: %s",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Pod zadaným e-mailom už v obchode existuje používateľ. Pre pokračovanie v objednávke cez Klarnu sa prosím prihláste.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Nakúpte teraz, zaplaťte neskôr",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Pohodlné platby na splátky",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Jednoduchá a priama platba",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "Hodnota objednávky je príliš vysoká.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Použitý spôsob platby: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna inkaso z účtu",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna okamžitý bankový prevod",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna na 3 bezúročné splátky",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Klarna financovanie",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Klarna B2B faktúra (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Klarna platba kartou za 30 dní",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Klarna faktúra",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Klarna platba kartou",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Klarna bankový prevod",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Klarna financovanie",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Klarna B2B faktura (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna platba po častiach",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Kreditná karta",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Upravená pokladňa",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Anonymizovaný názov produktu:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Niečo sa nepodarilo. Obnovte stránku a skúste to znova.",
);

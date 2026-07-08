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

$sLangName = "Magyar";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Hiba történt a rendelés ellenőrzése során",
    "TCKLARNA_CHECKOUT" => "Pénztár",

    "TCKLARNA_DISCOUNT_TITLE" => "Kedvezmény",
    "TCKLARNA_SURCHARGE_TITLE" => "Felár",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Kupon kedvezmény",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Díszcsomagolás",
    "TCKLARNA_GIFT_CARD_TITLE" => "Üdvözlőkártya",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Fizetési mód felár",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Trusted Shops Vásárlói garancia díj",

    "TCKLARNA_PASSWORD" => "Jelszó",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Trusted Shops Vásárlói garancia",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Már regisztrált ügyfél?",
    "TCKLARNA_LAW_NOTICE" => "Az adattovábbításra a <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">felhasználási feltételek</a> vonatkoznak",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Van kuponja?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Tovább a pénztárhoz",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Használat szállítási címként",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Szállítási cím kiválasztása",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Ügyfélfiók létrehozása",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Feliratkozás a hírlevélre",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Ügyfélfiók létrehozása ÉS feliratkozás a hírlevélre",
    "TCKLARNA_NO_CHECKBOX" => "Ne jelenjen meg jelölőnégyzet",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "A szállítási cím eltérhet a számlázási címtől",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "A telefonszám megadása kötelező a Klarna Checkoutban",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Születési dátum kötelező mezőként",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Kérjük, válassza ki a szállítási országot:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Nem találja az országát a listában?",
    "TCKLARNA_MORE_COUNTRIES" => "További szállítási országok",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Az országom nem szerepel a listán",
    "TCKLARNA_OTHER_COUNTRY" => "Egyéb országok",
    "TCKLARNA_RESET_COUNTRY" => "Az Ön országa: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "módosítás",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Kérjük, kattintson erre a gombra az Amazon-bejelentkezés elindításához",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Figyelem!</strong> A rendelés adatai eltérnek a Klarnánál tárolt adatoktól. ",
    "KLARNA_ORDER_IS_CANCELLED" => "A rendelést törölték. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">A rendelés megtekintése a Klarna Merchant Portal felületén.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Hiba történt. Kérjük, próbálja meg újra.",
    "KLARNA_WRONG_URLS_CONFIG" => "Konfigurációs hiba – ellenőrizze az ÁSZF és az elállási jog URL-címeit",
    "TCKLARNA_KP_INVALID_TOKEN" => "Érvénytelen hitelesítési token (Authorization Token). Kérjük, próbálja meg újra.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "A rendelési adatok megváltoztak.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "A Klarna fizetési mód használatához a kiválasztott pénznemnek meg kell egyeznie a számlázási/szállítási ország hivatalos pénznemével.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Konfigurációs hiba: Ebben az országban nem érhetők el Klarna fizetési módok.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "A Klarna fizetési mód jelenleg nem érhető el vállalati megrendelésekhez.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Ez a Klarna fizetési mód kizárólag magánszemélyek megrendeléseihez érhető el.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Ez a Klarna fizetési mód jelenleg kizárólag vállalati megrendelésekhez érhető el.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Kérjük, fogadja el az ÁSZF-et és a digitális tartalmakra vonatkozó elállási feltételeket.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Nincs elegendő raktárkészlet a következő termékből: %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Jelenleg nincs szállítási mód meghatározva ehhez az országhoz: %s",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "A megadott e-mail-címmel már létezik felhasználó a webáruházban. Kérjük, jelentkezzen be a Klarna-rendelés folytatásához.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Vásároljon most, fizessen később",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Fizessen kényelmesen részletekben",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Fizessen egyszerűen és közvetlenül",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "A rendelés értéke túl magas.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Alkalmazott fizetési mód: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Csoportos beszedés",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Azonnali banki átutalás (Sofort)",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna 3 kamatmentes részletben",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Klarna Finanszírozás",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Klarna B2B Számla (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Klarna Kártyás fizetés 30 napos határidővel",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Klarna Számla",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Klarna Kártyás fizetés",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Klarna Banki átutalás",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Klarna Finanszírozás",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Klarna B2B Számla (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Részletfizetés",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Hitelkártya",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Egyedi Pénztár",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Anonimizált terméknév:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Valami hiba történt. Frissítse az oldalt, és próbálja újra.",
);

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

$sLangName = "Dansk";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Fejl under kontrol af ordren",
    "TCKLARNA_CHECKOUT" => "Kasse",

    "TCKLARNA_DISCOUNT_TITLE" => "Rabat",
    "TCKLARNA_SURCHARGE_TITLE" => "Tillæg",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Rabatkode",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Gaveindpakning",
    "TCKLARNA_GIFT_CARD_TITLE" => "Takkekort",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Gebyr for betalingsmetode",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Trusted Shops Køberbeskyttelsesgebyr",

    "TCKLARNA_PASSWORD" => "Adgangskode",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Trusted Shops Køberbeskyttelse",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Allerede kunde?",
    "TCKLARNA_LAW_NOTICE" => "<a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">Vilkårene for brug</a> for dataoverførsel er gældende",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Har du en rabatkode?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Til kassen",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Brug som leveringsadresse",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Vælg leveringsadresse",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Opret kundekonto",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Tilmeld nyhedsbrev",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Opret kundekonto OG tilmeld nyhedsbrev",
    "TCKLARNA_NO_CHECKBOX" => "Vis ikke afkrydsningsfelt",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Leveringsadresse må afvige fra faktureringsadresse",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Telefonnummer er et obligatorisk felt i Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Fødselsdato som obligatorisk felt",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Vælg venligst dit leveringsland:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Er dit land ikke på listen?",
    "TCKLARNA_MORE_COUNTRIES" => "Flere leveringslande",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Mit land er ikke på listen",
    "TCKLARNA_OTHER_COUNTRY" => "Andre lande",
    "TCKLARNA_RESET_COUNTRY" => "Dit land: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "ændre",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Klik venligst på denne knap for at starte login med Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Bemærk!</strong> Dataene for denne ordre afviger fra de data, der er gemt hos Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "Ordren er blevet annulleret. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Vis denne ordre i Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Der opstod en fejl. Prøv venligst igen.",
    "KLARNA_WRONG_URLS_CONFIG" => "Fejl i konfigurationen – kontroller URL'erne til handelsbetingelser og fortrydelsesret",
    "TCKLARNA_KP_INVALID_TOKEN" => "Ugyldigt godkendelsestoken. Prøv venligst igen.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Ordredata er ændret.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "For at bruge en Klarna-betalingsmetode skal den valgte valuta svare til den officielle valuta i dit fakturerings-/leveringsland.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Konfigurationsfejl: Der er ingen Klarna-betalingsmetoder tilgængelige i dette land.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Betaling med denne Klarna-betalingsmetode er i øjeblikket ikke tilgængelig for virksomhedsordrer.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Betaling med denne Klarna-betalingsmetode er kun tilgængelig for ordrer fra privatpersoner.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Betaling med denne Klarna-betalingsmetode er i øjeblikket kun tilgængelig for virksomhedsordrer.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Accepter venligst handelsbetingelserne og fortrydelsesret for digitalt indhold.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Ikke tilstrækkeligt lager af produktet %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Der er i øjeblikket ikke defineret nogen forsendelsesmetode for dette land: %s",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Der findes allerede en bruger med den angivne e-mailadresse i shoppen. Log venligst ind for at fortsætte med Klarna-ordren.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Køb nu, betal senere",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Betal i mindre bidder",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Betal nemt og direkte",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "Ordreværdien er for høj.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Anvendt betalingsmetode: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Betalingsservice",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Straksforoverførsel",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna i 3 rentefrie rater",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Klarna Finansiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Klarna B2B-faktura (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Klarna Kortbetaling inden 30 dage",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Klarna Faktura",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Klarna Kortbetaling",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Klarna Bankoverførsel",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Klarna Finansiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Klarna B2B-faktura (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Delbetaling",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Tilpasset Checkout",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Anonymiseret produkttitel:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Noget gik galt. Genindlæs siden, og prøv igen.",
);

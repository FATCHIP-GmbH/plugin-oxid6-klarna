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

$sLangName = "Nederlands";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Fout bij de controle van de bestelling",
    "TCKLARNA_CHECKOUT" => "Afrekenen",

    "TCKLARNA_DISCOUNT_TITLE" => "Korting",
    "TCKLARNA_SURCHARGE_TITLE" => "Toeslag",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Kortingsbon",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Cadeauverpakking",
    "TCKLARNA_GIFT_CARD_TITLE" => "Wenskaart",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Toeslag betaalmethode",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Trusted Shops Kopersbescherming toeslag",

    "TCKLARNA_PASSWORD" => "Wachtwoord",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Trusted Shops Kopersbescherming",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Al klant?",
    "TCKLARNA_LAW_NOTICE" => "De <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">gebruiksvoorwaarden</a> voor gegevensoverdracht zijn van toepassing",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Heeft u een kortingsbon?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Naar de kassa",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Als afleveradres gebruiken",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Afleveradres kiezen",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Klantaccount aanmaken",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Aanmelden voor nieuwsbrief",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Klantaccount aanmaken EN aanmelden voor nieuwsbrief",
    "TCKLARNA_NO_CHECKBOX" => "Geen selectievakje weergeven",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Afleveradres mag afwijken van factuuradres",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Telefoonnummer is een verplicht veld in Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Geboortedatum is een verplicht veld",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Kies uw land van levering:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Staat uw land er niet bij?",
    "TCKLARNA_MORE_COUNTRIES" => "Meer leveringslanden",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Mijn land staat niet in de lijst",
    "TCKLARNA_OTHER_COUNTRY" => "Andere landen",
    "TCKLARNA_RESET_COUNTRY" => "Uw land: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "wijzigen",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Klik op deze knop om in te loggen met Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Let op!</strong> De gegevens van deze bestelling wijken af van de gegevens die bij Klarna zijn opgeslagen. ",
    "KLARNA_ORDER_IS_CANCELLED" => "De bestelling is geannuleerd. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Bekijk deze bestelling in het Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Er is een fout opgetreden. Probeer het aanzienlijk nog eens.",
    "KLARNA_WRONG_URLS_CONFIG" => "Fout in de configuratie - controleer de URL\'s voor de algemene voorwaarden en het herroepingsrecht",
    "TCKLARNA_KP_INVALID_TOKEN" => "Ongeldige autorisatietoken. Probeer het nog eens.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Bestelgegevens zijn gewijzigd.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "Om een Klarna betaalmethode te gebruiken, moet de geselecteerde valuta overeenkomen met de officiële valuta van uw factuur-/leveringsland.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Configuratiefout: Er zijn geen Klarna betaalmethoden beschikbaar in dit land.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Betalen met deze Klarna betaalmethode is momenteel niet beschikbaar voor zakelijke bestellingen.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Betalen met deze Klarna betaalmethode is alleen beschikbaar voor bestellingen van particulieren.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Betalen met deze Klarna betaalmethode is momenteel alleen beschikbaar voor zakelijke bestellingen.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Ga akkoord met de algemene voorwaarden en de herroepingsvoorwaarden voor digitale inhoud.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Onvoldoende voorraad van het product %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Er is momenteel geen verzendmethode gedefinieerd voor dit land: %s",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Er bestaat al een gebruiker met dit e-mailadres in de shop. Log in om door te gaan met de Klarna-bestelling.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Eerst kopen, later betalen",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "In termijnen betalen",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Eenvoudig en direct betalen",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "De bestelwaarde is te hoog.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Gebruikte betaalmethode: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Incasso",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Betaal Nu (Sofort)",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna in 3 renteloze delen",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Klarna Financiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Klarna B2B Factuur (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Klarna Kaartbetaling binnen 30 dagen",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Klarna Factuur",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Klarna Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Klarna Overboeking",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Klarna Financiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Klarna B2B Factuur (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Betaal in delen",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Creditcard",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Aangepaste Checkout",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Geanonimiseerde producttitel:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Er is iets misgegaan. Laad de pagina opnieuw en probeer het nog eens.",
);

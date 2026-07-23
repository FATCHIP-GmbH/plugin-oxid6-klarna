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

$sLangName = "Română";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Eroare la verificarea comenzii",
    "TCKLARNA_CHECKOUT" => "Finalizare comandă",

    "TCKLARNA_DISCOUNT_TITLE" => "Reducere",
    "TCKLARNA_SURCHARGE_TITLE" => "Suplatixă",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Reducere voucher",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Ambalaj de cadou",
    "TCKLARNA_GIFT_CARD_TITLE" => "Felicitare",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Taxă metodă de plată",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Taxă de protecție a cumpărătorului Trusted Shops",

    "TCKLARNA_PASSWORD" => "Parolă",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Protecție cumpărător Trusted Shops",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Sunteți deja client?",
    "TCKLARNA_LAW_NOTICE" => "Se aplică <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">termenii de utilizare</a> pentru transmiterea datelor",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Aveți un voucher?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Mergi la casă",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Utilizează ca adresă de livrare",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Alege adresa de livrare",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Creează cont de client",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Abonează-te la newsletter",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Creează cont de client ȘI abonează-te la newsletter",
    "TCKLARNA_NO_CHECKBOX" => "Nu afișa caseta de selectare",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Adresa de livrare poate diferi de adresa de facturare",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Numărul de telefon este un câmp obligatoriu în Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Data nașterii ca și câmp obligatoriu",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Vă rugăm să selectați țara de livrare:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Țara dumneavoastră nu este în listă?",
    "TCKLARNA_MORE_COUNTRIES" => "Alte țări de livrare",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Țara mea nu este în listă",
    "TCKLARNA_OTHER_COUNTRY" => "Alte țări",
    "TCKLARNA_RESET_COUNTRY" => "Țara dumneavoastră: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "modifică",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Vă rugăm să dați clic pe acest buton pentru a începe autentificarea cu Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Atenție!</strong> Datele acestei comenzi diferă de datele stocate la Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "Comanda a fost anulată. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Vizualizați această comandă în Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "A apărut o eroare. Vă rugăm să încercați din nou.",
    "KLARNA_WRONG_URLS_CONFIG" => "Eroare de configurare – verificați URL-urile pentru Termeni și Condiții și dreptul de retragere",
    "TCKLARNA_KP_INVALID_TOKEN" => "Token de autorizare nevalid. Vă rugăm să încercați din nou.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Datele comenzii s-au modificat.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "Pentru a utiliza o metodă de plată Klarna, moneda selectată trebuie să corespundă monedei oficiale a țării dumneavoastră de facturare/livrare.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Eroare de configurare: Nu sunt disponibile metode de plată Klarna în această țară.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Plata prin această metodă Klarna nu este disponibilă momentan pentru comenzile companiilor.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Plata prin această metodă Klarna este disponibilă doar pentru comenzile persoanelor fizice.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Plata prin această metodă Klarna este disponibilă momentan doar pentru comenzile companiilor.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Vă rugăm să acceptați Termenii și Condițiile și condițiile de retragere pentru conținutul digital.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Stoc insuficient pentru produsul %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Momentan nu este definită nicio metodă de livrare pentru această țară: %s",
    "TCKLARNA_PAYPAL_EXPRESS_SESSION_KILLED" => "Plata prin PayPal a fost anulată. PayPal nu a încasat nicio sumă.",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Există deja un utilizator în magazin cu adresa de e-mail introdusă. Vă rugăm să vă autentificați pentru a continua comanda Klarna.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Cumpără acum, plătește mai târziu",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Plătește avantajos în rate",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Plătește simplu și direct",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "Valoarea comenzii este prea mare.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Metoda de plată utilizată: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Debit Direct",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Transfer Bancar Direct (Sofort)",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna în 3 rate fără dobândă",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Finanțare Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Factură B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Plată cu cardul Klarna în 30 de zile",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Factură Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Plată cu cardul Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Transfer Bancar Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Finanțare Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Factură B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Plată fracționată",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Card de credit",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Checkout personalizat",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Numele produsului anonimizat:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Ceva nu a mers bine. Reîncărcați pagina și încercați din nou.",
);

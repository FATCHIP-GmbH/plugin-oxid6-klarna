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

$sLangName = "Polski";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Błąd podczas weryfikacji zamówienia",
    "TCKLARNA_CHECKOUT" => "Kasa",

    "TCKLARNA_DISCOUNT_TITLE" => "Rabat",
    "TCKLARNA_SURCHARGE_TITLE" => "Dopłata",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Rabat z kuponu",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Opakowanie ozdobne",
    "TCKLARNA_GIFT_CARD_TITLE" => "Karta z życzeniami",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Opłata za metodę płatności",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Opłata za ochronę kupującego Trusted Shops",

    "TCKLARNA_PASSWORD" => "Hasło",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Ochrona kupującego Trusted Shops",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Masz już konto?",
    "TCKLARNA_LAW_NOTICE" => "Obowiązują <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">warunki korzystania</a> z transmisji danych",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Masz kupon rabatowy?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Przejdź do kasy",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Użyj jako adresu dostawy",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Wybierz adres dostawy",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Załóż konto klienta",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Zapisz się do newslettera",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Załóż konto klienta I zapisz się do newslettera",
    "TCKLARNA_NO_CHECKBOX" => "Nie pokazuj pola wyboru (checkboxa)",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Adres dostawy może być inny niż adres fakturowania",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Numer telefonu jest polem obowiązkowym w Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Data urodzenia jako pole obowiązkowe",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Proszę wybrać kraj dostawy:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Nie ma Twojego kraju na liście?",
    "TCKLARNA_MORE_COUNTRIES" => "Więcej krajów dostawy",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Mojego kraju nie ma na liście",
    "TCKLARNA_OTHER_COUNTRY" => "Inne kraje",
    "TCKLARNA_RESET_COUNTRY" => "Twój kraj: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "zmień",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Proszę kliknąć ten przycisk, aby rozpocząć logowanie przez Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Uwaga!</strong> Dane tego zamówienia różnią się od danych zapisanych w Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "Zamówienie zostało anulowane. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Wyświetl to zamówienie w portalu Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Wystąpił błąd. Proszę spróbować ponownie.",
    "KLARNA_WRONG_URLS_CONFIG" => "Błąd konfiguracji – sprawdź adresy URL dla Regulaminu i Prawa do odstąpienia od umowy",
    "TCKLARNA_KP_INVALID_TOKEN" => "Nieprawidłowy token autoryzacyjny. Proszę spróbować ponownie.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Dane zamówienia uległy zmianie.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "Aby skorzystać z metody płatności Klarna, wybrana waluta musi odpowiadać oficjalnej walucie kraju fakturowania/dostawy.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Błąd konfiguracji: Metody płatności Klarna nie są dostępne w tym kraju.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Płatność tą metodą Klarna nie jest obecnie dostępna dla zamówień firmowych.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Płatność tą metodą Klarna jest dostępna wyłącznie dla zamówień osób prywatnych.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Płatność tą metodą Klarna jest obecnie dostępna wyłącznie dla zamówień firmowych.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Proszę zaakceptować Regulamin oraz warunki odstąpienia od umowy dla treści cyfrowych.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Niewystarczająca ilość produktu %s w magazynie.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Obecnie nie zdefiniowano żadnej metody wysyłki dla tego kraju: %s",
    "TCKLARNA_PAYPAL_EXPRESS_SESSION_KILLED" => "Płatność PayPal została anulowana. PayPal nie pobrał żadnych środków.",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "W sklepie istnieje już użytkownik o podanym adresie e-mail. Proszę się zalogować, aby kontynuować zamówienie z Klarna.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Kup teraz, zapłać później",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Zapłać wygodnie w ratach",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Zapłać łatwo i bezpośrednio",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "Wartość zamówienia jest zbyt wysoka.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Użyta metoda płatności: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Polecenie zapłaty",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Szybki przelew bankowy",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna w 3 nieoprocentowanych ratach",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Finansowanie Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Faktura B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Płatność kartą Klarna w ciągu 30 dni",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Faktura Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Płatność kartą Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Przelew bankowy Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Finansowanie Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Faktura B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Płatność w częściach",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Karta kredytowa",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Niestandardowy proces kasowy (Checkout)",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Zanonimizowana nazwa produktu:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Coś poszło nie tak. Odśwież stronę i spróbuj ponownie.",
);

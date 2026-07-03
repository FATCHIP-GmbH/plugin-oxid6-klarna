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

$sLangName = "Svenska";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Fel vid kontroll av ordern",
    "TCKLARNA_CHECKOUT" => "Kassa",

    "TCKLARNA_DISCOUNT_TITLE" => "Rabatt",
    "TCKLARNA_SURCHARGE_TITLE" => "Tillägg",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Rabattkod",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Presentinslagning",
    "TCKLARNA_GIFT_CARD_TITLE" => "Hälsningskort",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Avgift för betalsätt",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Avgift för Trusted Shops Köparskydd",

    "TCKLARNA_PASSWORD" => "Lösenord",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Trusted Shops Köparskydd",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Redan kund?",
    "TCKLARNA_LAW_NOTICE" => "<a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">Användarvillkoren</a> för dataöverföring gäller",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Har du en rabattkod?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Till kassan",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Använd som leveransadress",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Välj leveransadress",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Skapa kundkonto",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Prenumerera på nyhetsbrev",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Skapa kundkonto OCH prenumerera på nyhetsbrev",
    "TCKLARNA_NO_CHECKBOX" => "Visa inte kryssruta",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "Leveransadressen får skilja sig från faktureringsadressen",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "Telefonnummer är ett obligatoriskt fält i Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Födelsedatum som obligatoriskt fält",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Vänligen välj ditt leveransland:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "Finns ditt land inte med på listan?",
    "TCKLARNA_MORE_COUNTRIES" => "Fler leveransländer",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "Mitt land finns inte med i listan",
    "TCKLARNA_OTHER_COUNTRY" => "Andra länder",
    "TCKLARNA_RESET_COUNTRY" => "Ditt land: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "ändra",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Vänligen klicka på denna knapp för att starta inloggning med Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Observera!</strong> Uppgifterna för denna order skiljer sig från de uppgifter som finns sparade hos Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "Ordern har makulerats. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Visa denna order i Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Ett fel uppstod. Vänligen försök igen.",
    "KLARNA_WRONG_URLS_CONFIG" => "Fel i konfigurationen – kontrollera URL:erna till köpvillkor och ångerrätt",
    "TCKLARNA_KP_INVALID_TOKEN" => "Ogiltig auktoriseringstoken. Vänligen försök igen.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Orderuppgifterna har ändrats.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "För att använda ett Klarna-betalsätt måste den valda valutan matcha den officiella valutan i ditt fakturerings-/leveransland.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Konfigurationsfel: Inga Klarna-betalsätt är tillgängliga i detta land.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "Betalning med detta Klarna-betalsätt är för närvarande inte tillgängligt för företagsbeställningar.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "Betalning med detta Klarna-betalsätt är endast tillgängligt för beställningar från privatpersoner.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "Betalning med detta Klarna-betalsätt är för närvarande endast tillgängligt för företagsbeställningar.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Vänligen godkänn köpvillkoren och ångerrätten för digitalt innehåll.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Det finns inte tillräckligt i lager av produkten %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Det finns för närvarande inget fraktsätt definierat för detta land: %s",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Det finns redan en användare med den angivna e-postadressen i butiken. Vänligen logga in för att fortsätta med Klarna-beställningen.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Köp nu, betala senare",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Dela upp din betalning",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Betala enkelt och direkt",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "Ordervärdet är för högt.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Använt betalsätt: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Klarna Autogiro",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Klarna Direktbanköverföring",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna räntefritt på 3 delbetalningar",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Klarna Finansiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Klarna B2B-faktura (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Klarna Kortbetalning inom 30 dagar",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Klarna Faktura",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Klarna Kortbetalning",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Klarna Banköverföring",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Kreditkort",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Klarna Finansiering",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Klarna B2B-faktura (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Klarna Delbetalning",
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
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Anpassad kassa",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Anonymiserad produkttitel:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Något gick fel. Ladda om sidan och försök igen.",
);

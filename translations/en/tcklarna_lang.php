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

$sLangName = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset' => 'UTF-8',

    'TCKLARNA_EXCEPTION_OUT_OF_STOCK' => 'Validation error',
    'TCKLARNA_CHECKOUT'               => 'Checkout',

    'TCKLARNA_DISCOUNT_TITLE'                     => 'Discount',
    'TCKLARNA_SURCHARGE_TITLE'                    => 'Surcharge',
    'TCKLARNA_VOUCHER_DISCOUNT'                   => 'Coupon Discount',
    'TCKLARNA_GIFT_WRAPPING_TITLE'                => 'Gift wrapping',
    'TCKLARNA_GIFT_CARD_TITLE'                    => 'Gift card',
    'TCKLARNA_PAYMENT_FEE_TITLE'                  => 'Payment method fee',
    'TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE' => 'Trusted shops excellence fee',

    'TCKLARNA_PASSWORD'                          => 'Password',
    'TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION'     => 'Trusted Shops Buyer Protection',
    'TCKLARNA_ALREADY_A_CUSTOMER'                => 'I am already a customer',
    'TCKLARNA_LAW_NOTICE'                        => 'The <a href="%s" class="klarna-notification" target="_blank">conditions</a> of use for data transmission apply.',
    'TCKLARNA_OUTSIDE_VOUCHER'                   => 'Do you have a voucher?',
    'TCKLARNA_GO_TO_CHECKOUT'                    => 'Go to Checkout',
    'TCKLARNA_BUY_NOW'                           => 'Buy Now',
    'TCKLARNA_USE_AS_DELIVERY_ADDRESS'           => 'Use as the delivery address',
    'TCKLARNA_CHOOSE_DELIVERY_ADDRESS'           => 'Choose delivery address',
    'TCKLARNA_CREATE_USER_ACCOUNT'               => 'Create Customer Account',
    'TCKLARNA_SUBSCRIBE_TO_NEWSLETTER'           => 'Subscribe to Newsletter',
    'TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE' => 'Create Customer Account AND subscribe to Newsletter',
    'TCKLARNA_NO_CHECKBOX'                       => 'Do not show a Checkbox',
    'TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS'   => 'Allow separate shipping address',
    'TCKLARNA_PHONE_NUMBER_MANDATORY'            => 'Phone number mandatory',
    'TCKLARNA_DATE_OF_BIRTH_MANDATORY'           => 'Date of birth mandatory',
    'TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY'      => 'Please choose your shipping country:',
    'TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY' => 'Your country is not supported?',
    'TCKLARNA_MORE_COUNTRIES'                    => 'More countries',
    'TCKLARNA_MY_COUNTRY_IS_NOT_LISTED'          => 'My country is not listed',
    'TCKLARNA_OTHER_COUNTRY'                     => 'Other country',
    'TCKLARNA_RESET_COUNTRY'                     => 'Your chosen country: <strong>%s</strong> ',
    'TCKLARNA_CHANGE_COUNTRY'                    => 'change country',
    'TCKLARNA_LOGIN_INTO_AMAZON'                 => 'Please click the button below to login into amazon service',
    'KLARNA_ORDER_NOT_IN_SYNC'             => '<strong>Warning!</strong> This order\'s data is different on Klarna\'s side. ',
    'KLARNA_ORDER_IS_CANCELLED'            => 'Order is cancelled. ',
    'KLARNA_SEE_ORDER_IN_PORTAL'           => '<a href="%s" target="_blank" class="alert-link">See this order in the Klarna Portal</a>',

    'KLARNA_WENT_WRONG_TRY_AGAIN' => 'Something went wrong. Please try again',
    'KLARNA_WRONG_URLS_CONFIG'    => 'Configuration error - check terms/cancellation terms settings',

    'TCKLARNA_KP_CURRENCY_DONT_MATCH'      => 'In order to being able to use Klarna payments, the selected currency has to match the official currency of your billing country.',
    'TCKLARNA_KP_INVALID_TOKEN'            => 'Invalid authorization token. Please try again.',
    'TCKLARNA_KP_ORDER_DATA_CHANGED'       => 'Order data have been changed. Please try again.',
    'KP_NOT_AVAILABLE_FOR_COMPANIES'  => 'Payment with this Klarna payment method is currently not available for companies.',
    'KP_AVAILABLE_FOR_PRIVATE_ONLY'   => 'This Klarna payment method is only available for private orders.',
    'KP_AVAILABLE_FOR_COMPANIES_ONLY' => 'Payment with this Klarna payment method is currently available only for companies.',
    'TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY'  => 'Configuration error: No Klarna payment methods available for this country.',

    'TCKLARNA_PLEASE_AGREE_TO_TERMS'            => 'Please agree to Terms and Conditions and Right to Withdrawal for a downloadable item.',
    'TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK'        => 'Not enough items of product %s in stock.',
    'TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP' => 'Currently we have no shipping method set up for this country: %s',

    'TCKLARNA_ERROR_KEB_USER_EXISTS'         => 'There is already a registered user under the given E-Mail address. Please login in order to continue your Klarna Order.',

    'TCKLARNA_PAY_LATER_SUBTITLE'    => 'Pay X days after delivery',
    'TCKLARNA_SLICE_IT_SUBTITLE'     => 'Pay over time',
    'TCKLARNA_PAY_NOW_SUBTITLE'      => 'Easy and direct payment',
    'TCKLARNA_ORDER_AMOUNT_TOO_HIGH' => 'The order amount is too high.',

    'TCKLARNA_AUTHPAYMENTMETHOD'                       => 'Used payment type: ',
    'TCKLARNA_AUTHPAYMENTMETHOD_unknown'               => 'Klarna',
    'TCKLARNA_AUTHPAYMENTMETHOD_direct_debit'          => 'Klarna Direct Debit',
    'TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer'  => 'Klarna Direct Bank Transfer',
    'TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card'      => 'Klarna Pay in 3',
    'TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit'      => 'Klarna Financing',
    'TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice'           => 'Klarna B2B invoice (Billie)',
    'TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card'     => 'Klarna Pay later by Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_invoice'               => 'Klarna Invoice',
    'TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card'           => 'Klarna Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer'         => 'Klarna Bank Transfer',
    'TCKLARNA_AUTHPAYMENTMETHOD_card'                  => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount'          => 'Klarna Financing',
    'TCKLARNA_AUTHPAYMENTMETHOD_invoice_business'      => 'Klarna B2B invoice (Billie)',
    'TCKLARNA_AUTHPAYMENTMETHOD_mobilepay'             => 'MobilePay',
    'TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts'    => 'Klarna Pay later in parts',
    'TCKLARNA_AUTHPAYMENTMETHOD_swish'                 => 'Swish',
    'TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card'        => 'Apple Pay',
    'TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card'       => 'Google Pay',
    'TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires'      => 'Cartes Bancaires',
    'TCKLARNA_AUTHPAYMENTMETHOD_blik'                  => 'BLIK',
    'TCKLARNA_AUTHPAYMENTMETHOD_twint'                 => 'TWINT',
    'TCKLARNA_AUTHPAYMENTMETHOD_bancontact'            => 'Bancontact',
    'TCKLARNA_AUTHPAYMENTMETHOD_diners'                => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_discover'              => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_elo'                   => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_jcb'                   => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_union_pay'             => 'Credit Card',
    'TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank'           => 'Pay by Bank',
    'TCKLARNA_AUTHPAYMENTMETHOD_other'                 => 'Kustom Checkout',

    'TCKLARNA_ANONYMIZED_PRODUCT'                  => 'Anonymized product title:',

    'TCKLARNA_IS_ERROR_DEFAULT' => 'Something went wrong. Reload the page and try again.',
);


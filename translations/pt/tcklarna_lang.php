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

$sLangName = "Português";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    "charset" => "UTF-8",

    "TCKLARNA_EXCEPTION_OUT_OF_STOCK" => "Erro ao verificar a encomenda",
    "TCKLARNA_CHECKOUT" => "Finalizar compra",

    "TCKLARNA_DISCOUNT_TITLE" => "Desconto",
    "TCKLARNA_SURCHARGE_TITLE" => "Sobretaxa",
    "TCKLARNA_VOUCHER_DISCOUNT" => "Desconto de cupão",
    "TCKLARNA_GIFT_WRAPPING_TITLE" => "Embrulho para presente",
    "TCKLARNA_GIFT_CARD_TITLE" => "Cartão de felicitações",
    "TCKLARNA_PAYMENT_FEE_TITLE" => "Taxa do método de pagamento",
    "TCKLARNA_TRUSTED_SHOPS_EXCELLENCE_FEE_TITLE" => "Taxa de proteção de comprador da Trusted Shops",

    "TCKLARNA_PASSWORD" => "Palavra-passe",
    "TCKLARNA_TRUSTED_SHOP_BUYER_PROTECTION" => "Proteção de comprador da Trusted Shops",
    "TCKLARNA_ALREADY_A_CUSTOMER" => "Já é cliente?",
    "TCKLARNA_LAW_NOTICE" => "Aplicam-se os <a href=\"%s\" class=\"klarna-notification\" target=\"_blank\">termos de utilização</a> para a transmissão de dados",
    "TCKLARNA_OUTSIDE_VOUCHER" => "Tem um cupão?",
    "TCKLARNA_GO_TO_CHECKOUT" => "Ir para a caixa",
    "TCKLARNA_USE_AS_DELIVERY_ADDRESS" => "Usar como endereço de entrega",
    "TCKLARNA_CHOOSE_DELIVERY_ADDRESS" => "Escolher endereço de entrega",
    "TCKLARNA_CREATE_USER_ACCOUNT" => "Criar conta de cliente",
    "TCKLARNA_SUBSCRIBE_TO_NEWSLETTER" => "Subscrever a newsletter",
    "TCKLARNA_CREATE_USER_ACCOUNT_AND_SUBSCRIBE" => "Criar conta de cliente E subscrever a newsletter",
    "TCKLARNA_NO_CHECKBOX" => "Não mostrar caixa de seleção",
    "TCKLARNA_ALLOW_SEPARATE_SHIPPING_ADDRESS" => "O endereço de entrega pode ser diferente do endereço de faturação",
    "TCKLARNA_PHONE_NUMBER_MANDATORY" => "O número de telefone é um campo obrigatório no Klarna Checkout",
    "TCKLARNA_DATE_OF_BIRTH_MANDATORY" => "Data de nascimento como campo obrigatório",
    "TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY" => "Por favor, selecione o seu país de entrega:",
    "TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY" => "O seu país não está na lista?",
    "TCKLARNA_MORE_COUNTRIES" => "Mais países de entrega",
    "TCKLARNA_MY_COUNTRY_IS_NOT_LISTED" => "O meu país não está na lista",
    "TCKLARNA_OTHER_COUNTRY" => "Outros países",
    "TCKLARNA_RESET_COUNTRY" => "O seu país: <strong>%s</strong> ",
    "TCKLARNA_CHANGE_COUNTRY" => "alterar",
    "TCKLARNA_LOGIN_INTO_AMAZON" => "Por favor, clique neste botão para iniciar sessão com a Amazon",
    "KLARNA_ORDER_NOT_IN_SYNC" => "<strong>Atenção!</strong> Os dados desta encomenda diferem dos dados registados na Klarna. ",
    "KLARNA_ORDER_IS_CANCELLED" => "A encomenda foi cancelada. ",
    "KLARNA_SEE_ORDER_IN_PORTAL" => "<a href=\"%s\" target=\"_blank\" class=\"alert-link\">Ver esta encomenda no Klarna Merchant Portal.</a>",
    "KLARNA_WENT_WRONG_TRY_AGAIN" => "Ocorreu un erro. Por favor, tente novamente.",
    "KLARNA_WRONG_URLS_CONFIG" => "Erro de configuração – verifique os URLs para os Termos e Condições e o direito de livre resolução",
    "TCKLARNA_KP_INVALID_TOKEN" => "Token de autorização inválido. Por favor, tente novamente.",
    "TCKLARNA_KP_ORDER_DATA_CHANGED" => "Os dados da encomenda foram alterados.",
    "TCKLARNA_KP_CURRENCY_DONT_MATCH" => "Para utilizar um método de pagamento Klarna, a moeda selecionada deve corresponder à moeda oficial do seu país de faturação/entrega.",
    "TCKLARNA_KP_NOT_KLARNA_CORE_COUNTRY" => "Erro de configuração: Não existem métodos de pagamento Klarna disponíveis neste país.",

    "KP_NOT_AVAILABLE_FOR_COMPANIES" => "O pagamento com este método Klarna não está atualmente disponível para encomendas de empresas.",
    "KP_AVAILABLE_FOR_PRIVATE_ONLY" => "O pagamento com este método Klarna está apenas disponível para encomendas de particulares.",
    "KP_AVAILABLE_FOR_COMPANIES_ONLY" => "O pagamento com este método Klarna está atualmente disponível apenas para encomendas de empresas.",
    "TCKLARNA_PLEASE_AGREE_TO_TERMS" => "Por favor, aceite os Termos e Condições e as condições de resolução para conteúdos digitais.",
    "TCKLARNA_ERROR_NOT_ENOUGH_IN_STOCK" => "Stock insuficiente do produto %s.",
    "TCKLARNA_ERROR_NO_SHIPPING_METHODS_SET_UP" => "Atualmente não existe nenhum método de envio definido para este país: %s",
    "TCKLARNA_PAYPAL_EXPRESS_SESSION_KILLED" => "O seu pagamento PayPal foi cancelado. O PayPal não cobrou qualquer valor.",

    "TCKLARNA_ERROR_KEB_USER_EXISTS" => "Já existe um utilizador na loja com o e-mail indicado. Por favor, inicie sessão para continuar com a encomenda Klarna.",

    "TCKLARNA_PAY_LATER_SUBTITLE" => "Compre agora, pague mais tarde",
    "TCKLARNA_SLICE_IT_SUBTITLE" => "Pague comodamente em prestações",
    "TCKLARNA_PAY_NOW_SUBTITLE" => "Pague de forma fácil e direta",
    "TCKLARNA_ORDER_AMOUNT_TOO_HIGH" => "O valor da encomenda é demasiado elevado.",

    "TCKLARNA_AUTHPAYMENTMETHOD" => "Método de pagamento utilizado: ",
    "TCKLARNA_AUTHPAYMENTMETHOD_unknown" => "Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_debit" => "Débito Direto Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_direct_bank_transfer" => "Transferência Bancária Direta Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_slice_it_by_card" => "Klarna em 3 prestações sem juros",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_sum_credit" => "Financiamento Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_b2b_invoice" => "Fatura B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_by_card" => "Pagamento com cartão Klarna a 30 dias",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice" => "Fatura Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_card" => "Pagamento com cartão Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_bank_transfer" => "Transferência Bancária Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_card" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_fixed_amount" => "Financiamento Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_invoice_business" => "Fatura B2B Klarna (Billie)",
    "TCKLARNA_AUTHPAYMENTMETHOD_mobilepay" => "MobilePay",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_later_in_parts" => "Pagamento fracionado Klarna",
    "TCKLARNA_AUTHPAYMENTMETHOD_swish" => "Swish",
    "TCKLARNA_AUTHPAYMENTMETHOD_apple_pay_card" => "Apple Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_google_pay_card" => "Google Pay",
    "TCKLARNA_AUTHPAYMENTMETHOD_cartes_bancaires" => "Cartes Bancaires",
    "TCKLARNA_AUTHPAYMENTMETHOD_blik" => "BLIK",
    "TCKLARNA_AUTHPAYMENTMETHOD_twint" => "TWINT",
    "TCKLARNA_AUTHPAYMENTMETHOD_bancontact" => "Bancontact",
    "TCKLARNA_AUTHPAYMENTMETHOD_diners" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_discover" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_elo" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_jcb" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_union_pay" => "Cartão de crédito",
    "TCKLARNA_AUTHPAYMENTMETHOD_pay_by_bank" => "Pay by Bank",
    "TCKLARNA_AUTHPAYMENTMETHOD_other" => "Checkout personalizado",

    "TCKLARNA_ANONYMIZED_PRODUCT" => "Título do produto anonimizado:",

    "TCKLARNA_IS_ERROR_DEFAULT" => "Algo correu mal. Recarregue a página e tente novamente.",
);

[{if $sKlarnaIframe}]
    [{oxmultilang ident="REGISTERED_YOUR_ORDER" args=$klOrder->oxorder__oxordernr->value}]
    <div class="klarna-iframe-container">
        [{$sKlarnaIframe}]
        [{oxscript include=$oViewConf->getModuleUrl('tcklarna','out/src/js/tcklarna_checkout_handler.js') priority=10}]
    </div>
[{else}]
    [{oxmultilang ident="THANK_YOU_FOR_ORDER"}] [{$oxcmp_shop->oxshops__oxname->value}].
    <br>
    [{oxmultilang ident="REGISTERED_YOUR_ORDER" args=$order->oxorder__oxordernr->value}]
    <br>

    [{if $order->oxorder__tcklarna_klarnapaymentmethod->value}]
        [{oxmultilang ident="TCKLARNA_AUTHPAYMENTMETHOD"}]
        [{oxmultilang ident="TCKLARNA_AUTHPAYMENTMETHOD_"|cat:$order->oxorder__tcklarna_klarnapaymentmethod->value}]
        <br>
    [{/if}]

    [{if !$oView->getMailError()}]
        [{oxmultilang ident="MESSAGE_YOU_RECEIVED_ORDER_CONFIRM"}]
        <br>
    [{else}]
        <br>
        [{oxmultilang ident="MESSAGE_CONFIRMATION_NOT_SUCCEED"}]
        <br>
    [{/if}]
    <br>
    [{oxmultilang ident="MESSAGE_WE_WILL_INFORM_YOU"}]
    <br>
    <br>
[{/if}]
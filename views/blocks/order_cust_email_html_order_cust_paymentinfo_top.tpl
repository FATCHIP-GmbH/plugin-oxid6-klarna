[{if $payment->isKlarnaPayment()}]
    <h3 class="underline">[{oxmultilang ident="PAYMENT_METHOD"}]</h3>
    [{if $payment->oxuserpayments__oxpaymentsid->value === 'klarna_checkout'}]<br>[{/if}]
    <p>
        <b>[{oxmultilang ident="TCKLARNA_AUTHPAYMENTMETHOD_"|cat:$order->oxorder__tcklarna_klarnapaymentmethod->value}] [{if $basket->getPaymentCosts()}]([{$basket->getFPaymentCosts()}] [{$currency->sign}])[{/if}]</b>
    </p>
    <br>
    <br>
[{else}]
    [{$smarty.block.parent}]
[{/if}]
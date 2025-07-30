[{assign var="aKlPromotion" value=$oViewConf->getOnSitePromotionInfo('sKlarnaStripPromotion')}]
[{assign var="sKlarnaMessagingScript" value=$oViewConf->getOnSitePromotionInfo('sKlarnaMessagingScript')}]
[{if $aKlPromotion && $oView->getClassName() === 'start' && $sKlarnaMessagingScript|trim}]
    <div>
        [{$aKlPromotion}]
    </div>
    <div class="clear clearfix"></div>
[{/if}]

[{$oViewConf->logoutUserIfNeeded()}]

[{if $oViewConf->getKcoApplePayDeviceEligibility() === null}]
    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        const klarna_check_applepay = async () => {
            var urlShopId = getParameterByName('shp', window.location.search);
            var urlShopParam = urlShopId ? '&shp=' + urlShopId : '';
            const isEligible = !!(window.ApplePaySession && ApplePaySession.canMakePayments());

            $.ajax({
                   type: 'POST',
                   dataType: 'json',
                   url: '/index.php?cl=KlarnaDeviceEligibility&fnc=setKcoApplePayDeviceEligibility' + urlShopParam,
                   data: { isEligible: isEligible ? 1 : 0 },
                   statusCode: {
                   200: function () {
                       console.log('Apple Pay eligibility sent successfully.');
                   },
                   400: function () {
                       console.warn('Bad request while sending Apple Pay eligibility.');
                   },
                   500: function () {
                       console.error('Server error while sending Apple Pay eligibility.');
                   }
                   }
               });
        };
        // Ensure the function runs when the script is loaded
        document.addEventListener('DOMContentLoaded', klarna_check_applepay);
    </script>
[{/if}]

<style>
    klarna-placement{
        display: block!important;
    }
</style>

[{$smarty.block.parent}]
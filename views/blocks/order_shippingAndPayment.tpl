[{$smarty.block.parent}]

[{if $payment && $payment->isKPPayment()}]
    [{capture assign="insertLogoJS"}]
        var theme = '[{$oViewConf->getActiveTheme()}]';
        if(theme === 'flow'){
            var $parent = $('#orderPayment').find('.panel-body');
        }
        if(theme === 'wave'){
            var $parent = $('#orderPayment').find('.card-body');
        }

        if(typeof $parent !== 'undefined') {
            var parentStyle = getComputedStyle($parent[0]);
            var offset = 5;
            var height = parseInt(parentStyle.height) - offset * 2;
            var margin = parseInt(parentStyle.paddingTop) - offset;

            // Clear existing content and append "Klarna" + badge image
            $parent.empty().append(
                $('<span>')
                    .text('Klarna '),
                $('<img>')
                    .attr('src', "[{$payment->getBadgeUrl()}]")
                    .attr('height', height + 'px')
                    .css({ 'margin': margin + 'px 10px', 'vertical-align': 'middle' })
            );
        }
    [{/capture}]
    [{oxscript add=$insertLogoJS priority=10}]
[{/if}]

<?php

namespace TopConcepts\Klarna\Tests\Unit\Model;


use OxidEsales\Eshop\Application\Model\UserPayment;
use OxidEsales\Eshop\Core\Field;
use TopConcepts\Klarna\Tests\Unit\ModuleUnitTestCase;

/**
 * Class KlarnaUserPaymentTest
 * @package TopConcepts\Klarna\Tests\Unit\Models
 * @covers \TopConcepts\Klarna\Model\KlarnaUserPayment
 */
class KlarnaUserPaymentTest extends ModuleUnitTestCase
{
    /**
     * @dataProvider paymentDataProvider
     * @param $payId
     * @param $expectedResult
     * @param $notUsed
     */
    public function testGetBadgeUrl($payId, $expectedResult, $notUsed)
    {
        $userPaymentModel                               = oxNew(UserPayment::class);
        $userPaymentModel->oxuserpayments__oxpaymentsid = new Field($payId, Field::T_RAW);

        $result = $userPaymentModel->getBadgeUrl();

        $this->doAssertContains($expectedResult, $result);
    }

    public function paymentDataProvider()
    {
        return [
            ['klarna_checkout', '//x.klarnacdn.net/payment-method/assets/badges/generic/klarna.svg', true],
            ['klarna_pay_now', '//x.klarnacdn.net/payment-method/assets/badges/generic/klarna.svg', true],
            ['klarna_pay_later', '//x.klarnacdn.net/payment-method/assets/badges/generic/klarna.svg', true],
            ['other', '//cdn.klarna.com/1.0/shared/image/generic/badge/de_de//standard/pink.png', false],
            ['klarna_fake', '//cdn.klarna.com/1.0/shared/image/generic/badge/de_de//standard/pink.png', false],
            ['klarna_slice_it', '//x.klarnacdn.net/payment-method/assets/badges/generic/klarna.svg', true],
        ];
    }

    /**
     * @dataProvider paymentDataProvider
     * @param $payId
     * @param $notUsed
     * @param $isKlarna
     */
    public function testIsKlarnaPayment($payId, $notUsed, $isKlarna)
    {
        $userPaymentModel                               = oxNew(UserPayment::class);
        $userPaymentModel->oxuserpayments__oxpaymentsid = new Field($payId, Field::T_RAW);

        $this->assertEquals($isKlarna, $userPaymentModel->isKlarnaPayment());
    }
}

<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\BaseRequest;

class SupplierQueryRequest extends BaseRequest
{

    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets merchantNo
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     * @param  string  $merchantNo
     * @return SupplierQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

        return $this;
    }

    public static function getOperationId()
    {
        return 'supplierQuery';
    }

}

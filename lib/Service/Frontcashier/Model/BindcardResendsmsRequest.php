<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardResendsmsRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;

    /**
     * @var string
     */
    private $merchantFlowId;

    /**
     * Gets parentMerchantNo
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     * @param  string  $parentMerchantNo
     * @return BindcardResendsmsRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;

        return $this;
    }

    /**
     * Gets merchantFlowId
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     * @param  string  $merchantFlowId
     * @return BindcardResendsmsRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;

        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardResendsms';
    }
}
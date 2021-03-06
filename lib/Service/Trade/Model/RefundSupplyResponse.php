<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class RefundSupplyResponse extends BaseResponse
{

    /**
     * @var RefundSupplyYopSupplyCardInfoRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyYopSupplyCardInfoRefundResponseDTOResult';
    }

    /**
     * @param  RefundSupplyYopSupplyCardInfoRefundResponseDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundSupplyYopSupplyCardInfoRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

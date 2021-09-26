<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class TradeOrderResponse extends BaseResponse
{
    /**
     * @var TradeOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderResponseDTOResult';
    }

    /**
     * @param  TradeOrderResponseDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class PrePayResponse extends BaseResponse
{

    /**
     * @var PrePayOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayOrderResponseDTOResult';
    }

    /**
     * @param  PrePayOrderResponseDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PrePayOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

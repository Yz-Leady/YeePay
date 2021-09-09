<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class RegisterQueryResponse extends BaseResponse
{

    /**
     * @var RegisterQueryNetInProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryNetInProgressQueryRespDtoResult';
    }

    /**
     * @param  RegisterQueryNetInProgressQueryRespDtoResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterQueryNetInProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }

}

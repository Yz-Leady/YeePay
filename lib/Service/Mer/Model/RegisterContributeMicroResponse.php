<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class RegisterContributeMicroResponse extends BaseResponse
{

    /**
     * @var RegisterContributeMicroContributeMicroMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMicroContributeMicroMerchantNetInRespDtoResult';
    }

    /**
     * @param  RegisterContributeMicroContributeMicroMerchantNetInRespDtoResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeMicroContributeMicroMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }

}

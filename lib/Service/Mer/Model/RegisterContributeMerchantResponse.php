<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterContributeMerchantResponse extends BaseResponse
{
    /**
     * @var RegisterContributeMerchantContributeMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantContributeMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterContributeMerchantContributeMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeMerchantContributeMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}

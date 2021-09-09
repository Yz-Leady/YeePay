<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthStateQueryResponse extends BaseResponse
{
    /**
     * @var AuthStateQueryIdentityAuthStateResDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryIdentityAuthStateResDtoResult';
    }

    /**
     * @param AuthStateQueryIdentityAuthStateResDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthStateQueryIdentityAuthStateResDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}

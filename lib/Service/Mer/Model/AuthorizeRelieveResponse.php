<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthorizeRelieveResponse extends BaseResponse
{
    /**
     * @var AuthorizeRelieveMGRelieveAuthorizeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeRelieveMGRelieveAuthorizeRespDTOResult';
    }

    /**
     * @param AuthorizeRelieveMGRelieveAuthorizeRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthorizeRelieveMGRelieveAuthorizeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}

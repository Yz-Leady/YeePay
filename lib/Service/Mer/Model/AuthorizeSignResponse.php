<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class AuthorizeSignResponse extends BaseResponse
{

    /**
     * @var AuthorizeSignMGAuthorizeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeSignMGAuthorizeRespDTOResult';
    }

    /**
     * @param  AuthorizeSignMGAuthorizeRespDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthorizeSignMGAuthorizeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

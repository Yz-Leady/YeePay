<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxySendFirstCardSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxySendFirstCardSmscodeBaseResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendFirstCardSmscodeBaseResponseResult';
    }

    /**
     * @param FacepayProxySendFirstCardSmscodeBaseResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxySendFirstCardSmscodeBaseResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}

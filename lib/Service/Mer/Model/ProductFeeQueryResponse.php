<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ProductFeeQueryResponse extends BaseResponse
{
    /**
     * @var ProductFeeQueryQueryProductFeeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryQueryProductFeeRespDtoResult';
    }

    /**
     * @param ProductFeeQueryQueryProductFeeRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductFeeQueryQueryProductFeeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}

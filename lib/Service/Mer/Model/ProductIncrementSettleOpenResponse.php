<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ProductIncrementSettleOpenResponse extends BaseResponse
{
    /**
     * @var ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult';
    }

    /**
     * @param ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}

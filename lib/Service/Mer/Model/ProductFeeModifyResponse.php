<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class ProductFeeModifyResponse extends BaseResponse
{

    /**
     * @var ProductFeeModifyModifyProductFeeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyModifyProductFeeRespDtoResult';
    }

    /**
     * @param  ProductFeeModifyModifyProductFeeRespDtoResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductFeeModifyModifyProductFeeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }

}

<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class TransferB2bOrderResponse extends BaseResponse
{

    /**
     * @var TransferB2bOrderMgTransferOrderRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderMgTransferOrderRespDTOResult';
    }

    /**
     * @param  TransferB2bOrderMgTransferOrderRespDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2bOrderMgTransferOrderRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

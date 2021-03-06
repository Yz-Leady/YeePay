<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class WithdrawCardBindResponse extends BaseResponse
{

    /**
     * @var WithdrawCardBindBindCardRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindBindCardRespDTOResult';
    }

    /**
     * @param  WithdrawCardBindBindCardRespDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardBindBindCardRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

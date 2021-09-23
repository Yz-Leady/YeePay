<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class BindcardResendsmsResponse extends BaseResponse
{
    /**
     * @var BindcardResendsmsOpenAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardResendsmsOpenAuthBindCardResponseDTOResult';
    }

    /**
     * @param  BindcardResendsmsOpenAuthBindCardResponseDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardResendsmsOpenAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
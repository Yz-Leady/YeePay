<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\BaseResponse;

class YjzfSendsmsResponse extends BaseResponse
{

    /**
     * @var YjzfSendsmsAPIBasicResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfSendsmsAPIBasicResponseDTOResult';
    }

    /**
     * @param  YjzfSendsmsAPIBasicResponseDTOResult  $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YjzfSendsmsAPIBasicResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }

}

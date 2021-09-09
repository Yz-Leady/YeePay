<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigAdd0Response extends BaseResponse
{
    /**
     * @var WechatConfigAddWechatConfigFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigFlatResponseDTOResult';
    }

    /**
     * @param WechatConfigAddWechatConfigFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigAddWechatConfigFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}

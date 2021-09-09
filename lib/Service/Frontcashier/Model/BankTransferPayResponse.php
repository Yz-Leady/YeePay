<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankTransferPayResponse extends BaseResponse
{
    /**
     * @var BankTransferPayAPIOfflineTransferResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayAPIOfflineTransferResponseDTOResult';
    }

    /**
     * @param BankTransferPayAPIOfflineTransferResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankTransferPayAPIOfflineTransferResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}

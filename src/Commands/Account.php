<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder;
use Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRequest;

class Account extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = AccountClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function accountinfosQuery(string $merchantNo)
    {
        try {
            $request = new AccountinfosQueryRequest();
            $request->setMerchantNo($merchantNo);
            $response = $this->client->accountinfosQuery($request);

            return $response->getResult();
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function WithdrawCardBind(array $data)
    {
        $request = new WithdrawCardBindRequest();
        $request->setMerchantNo($data['merchantNo'])
                ->setBankCardType($data['bankCardType'])
                ->setAccountNo($data['accountNo'])
                ->setBankCode($data['bankCode']);
        $response = $this->client->withdrawCardBind($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

    public function WithdrawCardModify(array $data)
    {
        $request = new WithdrawCardModifyRequest();
        $request->setMerchantNo($data['merchantNo'])
                ->setBankCardOperateType('CANCELLED')
                ->setBindId($data['bindId']);

        $response = $this->client->withdrawCardModify($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

    public function CardQuery(string $merchantNo)
    {
        $request = new WithdrawCardQueryRequest();
        $request->setMerchantNo($merchantNo);
        $response = $this->client->withdrawCardQuery($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

    public function PayOrder(array $data)
    {
        $request = new PayOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantNo(config('yeepay.merchantNo'))
                ->setRequestNo($data['requestNo'])
                ->setOrderAmount($data['amount'])
                ->setFeeChargeSide('PAYEE')
                ->setReceiveType('REAL_TIME')
                ->setReceiverBankCode($data['receiverBankCode'])
                ->setReceiverAccountNo($data['receiverAccountNo'])
                ->setReceiverAccountName($data['receiverAccountName'])
                ->setBankAccountType($data['bankAccountType'] ?? 'DEBIT_CARD')
                ->setNotifyUrl($data['notifyUrl']);
        $response = $this->client->payOrder($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

    public function Withdraw(array $data)
    {
        $request = new WithdrawOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantNo($data['merchantNo'])
                ->setRequestNo($data['requestNo'])
                ->setBankCardId($data['bankCardId'])
                ->setReceiveType('REAL_TIME')
                ->setOrderAmount($data['amount'])
                ->setNotifyUrl($data['notifyUrl']);
        $response = $this->client->withdrawOrder($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

}
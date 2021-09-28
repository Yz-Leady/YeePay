<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder;
use Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryRequest;
use Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRequest;

class Account extends InitConfig
{

    const MESSAGE = [
        'UA00008' => '产品校验异常，请核对或稍后再试',
        'UA00010' => '账户不存在或已注销',
        'UA00011' => '商户账户状态异常',
        'UA30001' => '系统异常',
        'UA30006' => '商户不存在或状态异常',
        'UA30009' => '商户关系异常',
        'UA30012' => '账户余额不足，核对后再试',
        'UA30013' => '订单已存在，请勿重复发起',
        'UA30014' => '商户未开通产品，不能发起该交易',
        'UA40001' => '金额格式不正确',
        'UA5007'  => '单笔转账额度超限',
        'UA5008'  => '字段长度超长',
    ];

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = AccountClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function transferQuery(string $requestNo)
    {
        $request = new TransferB2bQueryRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setRequestNo($requestNo);
        $response = $this->client->transferB2bQuery($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error(self::MESSAGE[$result['returnCode']]);
        }
    }

    public function transfer(array $data)
    {
        $request = new TransferB2bOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setRequestNo($data['requestNo'])
                ->setFromMerchantNo(config('yeepay.merchantNo'))
                ->setToMerchantNo($data['merchantNo'])
                ->setOrderAmount($data['amount'])
                ->setFeeChargeSide($data['chargeSide'])
                ->setUsage($data['usage'])
                ->setNotifyUrl($data['notifyUrl']);
        $response = $this->client->transferB2bOrder($request);
        $result   = $response->getResult();
        info($result);
        if ($result['returnCode'] == 'UA00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
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
                ->setReceiveType('TWO_HOUR')
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
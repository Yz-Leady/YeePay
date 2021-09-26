<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirm0Request;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestRequest;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardResendsmsRequest;

class Frontcashier extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = FrontcashierClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function bindCard(array $data)
    {
        $request = new BindcardRequestRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantFlowId($data['merchantFlowId'])
                ->setMerchantNo($data['merchantNo'])
                ->setUserNo($data['merchantNo'])
                ->setUserType($data['userType'])
                ->setBankCardNo($data['bankCardNo'])
                ->setUserName($data['userName'])
                ->setIdCardNo($data['idCardNo'])
                ->setPhone($data['phone'])
                ->setCardType($data['cardType'])
                ->setAuthType($data['authType']);
        $response = $this->client->bindcardRequest($request);
        $result   = $response->getResult();
        if ($result['returnCode'] == 'NOP00000') {
            return $this->success($result);
        } elseif ($result['returnCode'] == 'NOP04004') {
            $res = $this->reSendSms($data['merchantFlowId']);
            if ($res['code'] == 200) {
                return $this->success($result);
            } else {
                return $this->error($res['message']);
            }
        } else {
            return $this->error($result['message']);
        }
    }

    public function reSendSms(string $merchantFlowId)
    {
        $request = new BindcardResendsmsRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantFlowId($merchantFlowId);
        $response = $this->client->bindcardResendsms($request);
        $result   = $response->getResult();
        if ($result['code'] == 'NOP00000 ') {
            return $this->success($result);
        } else {
            return $this->error($result['message']);
        }
    }

    public function bindcardConfirm(string $merchantFlowId, string $smsCode)
    {
        $request = new BindcardConfirm0Request();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantFlowId($merchantFlowId)
                ->setSmsCode($smsCode);
        $response = $this->client->bindcardConfirm_0($request);
        $result   = $response->getResult();

        if ($result['code'] == 'NOP00000') {
            return $this->success($result);
        } else {
            return $this->error($result['message']);
        }
    }

}
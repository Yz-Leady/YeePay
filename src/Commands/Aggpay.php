<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayRequest;

class Aggpay extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = AggpayClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function PrePay(array $data)
    {
//        try {
            $request = new PrePayRequest();
            $request->setParentMerchantNo(config('yeepay.merchantNo'))
                    ->setMerchantNo(config('yeepay.merchantNo'))
                    ->setOrderId($data['orderId'] ?? '')
                    ->setOrderAmount($data['orderAmount'] ?? '')
                    ->setExpiredTime(now()->addMinutes(30)->toDateTimeString())
                    ->setNotifyUrl($data['notifyUrl'] ?? '')
                    ->setRedirectUrl($data['redirectUrl'] ?? '')
                    ->setMemo($data['memo'] ?? '')
                    ->setGoodsName($data['goodsName'] ?? '')
                    ->setPayWay($data['payWay'] ?? 'USER_SCAN')
                    ->setChannel($data['channel'] ?? '')
                    ->setUserIp($data['userIp']);
            $response = $this->client->prePay($request);
            $result   = $response->getResult();

            return $result;
            if ($result['returnCode'] == 'NIG00000') {
                return $this->success($result);
            } else {
                return $this->error($result['returnMsg']);
            }
//        } catch (Exception $e) {
//            return $this->error($e->getMessage());
//        }

    }

}
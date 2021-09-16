<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Cashier\CashierClientBuilder;
use Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderRequest;

class Cashier extends InitConfig
{
    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = CashierClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function PayLinkOrder(array $data)
    {
        $request=new PayLinkOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantNo(config('yeepay.merchantNo'))
                ->setOrderId($data['orderId'] ?? '')
                ->setAmount($data['orderAmount'] ?? '')
                ->setExpiredTime(now()->addMinutes(30)->toDateTimeString())
                ->setNotifyUrl($data['notifyUrl'] ?? '')
                ->setGoodsName($data['goodsName'] ?? '');
        $response = $this->client->payLinkOrder($request);
        $result   = $response->getResult();
        return $result;
    }

}
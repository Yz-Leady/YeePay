<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderRequest;
use Yeepay\Yop\Sdk\Service\Std\StdClientBuilder;

class Std extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = StdClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function TradeOrder(array $data)
    {
        $goodsParam = $this->getJson($data['goodsParam'] ?? '');

        $request = new TradeOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
                ->setMerchantNo(config('yeepay.merchantNo'))
                ->setOrderId($data['no'] ?? '')
                ->setOrderAmount($data['amount'] ?? '')
                ->setNotifyUrl($data['notifyUrl'])
                ->setRedirectUrl($data['redirectUrl'])
                ->setGoodsParamExt($goodsParam);
        $response = $this->client->tradeOrder($request);
        $result   = $response->getResult();
        dd($result);
    }

}
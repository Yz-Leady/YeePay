<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Trade\Model\OrderRequest;
use Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder;

class Trade extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = TradeClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function order(array $data)
    {
        try {
            $request = new OrderRequest();
            $request->setParentMerchantNo(config('yeepay.merchantNo'))
                    ->setMerchantNo(config('yeepay.merchantNo'))
                    ->setOrderId($data['order_id'])
                    ->setOrderAmount($data['amount'])
                    ->setGoodsName($data['goods_name'])
                    ->setExpiredTime($data['expiredTime'] ?? now()->addMinutes(30))
                    ->setNotifyUrl($data['notifyUrl']);
            $respnonse = $this->client->order($request);

            $result = $respnonse->getResult();
            if ($result['code'] == 'OPR00000') {
                return $this->success($result);
            } else {
                return $this->error($result['message']);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }

    }

}
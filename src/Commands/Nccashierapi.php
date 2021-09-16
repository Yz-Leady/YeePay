<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayRequest;
use Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder;

class Nccashierapi extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = NccashierapiClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function pay(array $data)
    {
        $request = new ApiPayRequest();
        $request->setToken($data['token']);
        $request->setPayTool($data['payTool']);
        $request->setPayType($data['payType']);
        $request->setUserIp($data['userIp']);
        $request->setAppId($data['appId']);
        $request->setOpenId($data['openId']);
        $request->setVersion('1.0');
        $response = $this->client->apiPay($request);
        $result   = $response->getResult();
        if ($result['code'] == 'CAS00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

}
<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder;
use Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest;
use Exception;

class Account extends InitConfig
{

    protected $client;

    public function __construct()
    {
        $appSdkConfig = new AppSdkConfig($this->getParams());

        $this->client = AccountClientBuilder::builder($appSdkConfig)->build();
    }

    public function accountinfosQuery()
    {
        $request = new AccountinfosQueryRequest();
        $request->setMerchantNo("merchantNo_example");
        try {
            $response = $this->client->accountinfosQuery($request);
            print_r($response->getResult());
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}
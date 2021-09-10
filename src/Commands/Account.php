<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder;
use Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest;

class Account extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = AccountClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function accountinfosQuery()
    {
        $request = new AccountinfosQueryRequest();
        $request->setMerchantNo("merchantNo_example");
        $response = $this->client->accountinfosQuery($request);

        return $response->getResult();

    }

}
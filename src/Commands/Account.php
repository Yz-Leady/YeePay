<?php

namespace Leady\YeePay\Commands;

use Exception;
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

}
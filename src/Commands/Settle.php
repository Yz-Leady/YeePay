<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQueryRequest;
use Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder;

class Settle extends InitConfig
{
    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = SettleClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function recordsQuery(string $merchantNo, string $start_at, string $end_at)
    {
        $request = new RecordsQueryRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
            ->setMerchantNo($merchantNo)
            ->setSettleRequestBeginTime($start_at)
            ->setSettleRequestEndTime($end_at);
        $response = $this->client->recordsQuery($request);
        $result   = $response->getResult();
        if ($result['code'] == '000000') {
            return $this->success($result);
        } else {
            return $this->error($result['message']);
        }
    }
}
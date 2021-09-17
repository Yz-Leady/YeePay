<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadRequest;
use Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderRequest;
use Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder;

class Sys extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = SysClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function MerchantQualUpload(string $filePath)
    {
        try {
            $request  = new MerchantQualUploadRequest();
            $request->setMerQual(fopen($filePath, 'r'));
            $response = $this->client->merchantQualUpload($request);
            $result   = $response->getResult();
            if ($result['returnCode'] == 'REG00000') {
                return $this->success(['merQualUrl' => $result['merQualUrl']]);
            } else {
                return $this->error($result['returnMsg']);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function TradeOrder(array $data)
    {
        $goodsParam   = $this->getJson($data['goodsParam'] ?? '');

        $request=new TradeOrderRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
            ->setMerchantNo(config('yeepay.merchantNo'))
            ->setOrderId($data['no']??'')
            ->setOrderAmount($data['amount']??'')
            ->setNotifyUrl($data['notifyUrl'])
            ->setGoodsParamExt($goodsParam);
        $response = $this->client->tradeOrder($request);
        $result   = $response->getResult();
        dd($result);
    }

}
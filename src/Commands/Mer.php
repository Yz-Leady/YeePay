<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder;
use Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryRequest;
use Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantRequest;
use Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMicroRequest;
use Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryRequest;

class Mer extends InitConfig
{

    protected $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = MerClientBuilder::builder($this->getSdkConfig())->build();
    }

    public function RegisterContributeMerchant(array $data)
    {
        try {
            $role            = $data['role'] ?? 'SETTLED_MERCHANT';
            $subjectInfo     = $this->getJson($data['subjectInfo'] ?? '');
            $contactInfo     = $this->getJson($data['contactInfo'] ?? '');
            $corporationInfo = $this->getJson($data['corporationInfo'] ?? '');
            $addressInfo     = $this->getJson($data['addressInfo'] ?? '');
            $productInfo     = $this->getJson($data['productInfo'] ?? '');
            $request         = new RegisterContributeMerchantRequest();
            $request->setBusinessRole($role)
                    ->setMerchantSubjectInfo($subjectInfo)
                    ->setMerchantContactInfo($contactInfo)
                    ->setMerchantCorporationInfo($corporationInfo)
                    ->setBusinessAddressInfo($addressInfo)
                    ->setNotifyUrl($data['notifyUrl'] ?? '');
            $response = $this->client->registerContributeMerchant($request);
            $result   = $response->getResult();
            if ($result['returnCode'] == 'NIG00000') {
                return $this->success($result);
            } else {
                return $this->error($result['returnMsg']);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function RegisterContributeMicro(array $data)
    {
        try {
            $role            = $data['role'] ?? 'SHARE_MERCHANT';
            $subjectInfo     = $this->getJson($data['subjectInfo'] ?? '');
            $corporationInfo = $this->getJson($data['corporationInfo'] ?? '');
            $addressInfo     = $this->getJson($data['addressInfo'] ?? '');
            $accountInfo     = $this->getJson($data['accountInfo'] ?? '');
            $request         = new RegisterContributeMicroRequest();
            $request->setRequestNo($data['requestNo'] ?? '')
                    ->setBusinessRole($role)
                    ->setMerchantSubjectInfo($subjectInfo)
                    ->setMerchantCorporationInfo($corporationInfo)
                    ->setBusinessAddressInfo($addressInfo)
                    ->setAccountInfo($accountInfo)
                    ->setNotifyUrl($data['notifyUrl'] ?? '');
            $response = $this->client->registerContributeMicro($request);
            $result   = $response->getResult();
            if ($result['returnCode'] == 'NIG00000') {
                return $this->success($result);
            } else {
                return $this->error($result['returnMsg']);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function RegisterQuery(string $requestNo)
    {
        try {
            $request = new RegisterQueryRequest();
            $request->setRequestNo($requestNo);
            $response = $this->client->registerQuery($request);
            $result   = $response->getResult();
            if ($result['returnCode'] == 'NIG00000') {
                return $this->success($result);
            } else {
                return $this->error($result['returnMsg']);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }

    }

    public function FeeQuery(string $merchantNo)
    {
        $request=new ProductFeeQueryRequest();
        $request->setParentMerchantNo(config('yeepay.merchantNo'))
            ->setMerchantNo($merchantNo);
        $response = $this->client->productFeeQuery($request);
        $result   = $response->getResult();

        dd(json_decode($result['productInfo']));
        if ($result['returnCode'] == 'NIG00000') {
            return $this->success($result);
        } else {
            return $this->error($result['returnMsg']);
        }
    }

}
<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder;
use Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantRequest;

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
            $request         = new RegisterContributeMerchantRequest();
            $request->setBusinessRole($role)
                    ->setMerchantSubjectInfo($subjectInfo)
                    ->setMerchantContactInfo($contactInfo)
                    ->setMerchantCorporationInfo($corporationInfo)
                    ->setBusinessAddressInfo($addressInfo)
                    ->setNotifyUrl($data['notifyUrl'] ?? '');
            $response = $this->client->registerContributeMerchant($request);

            return $response->getResult();
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
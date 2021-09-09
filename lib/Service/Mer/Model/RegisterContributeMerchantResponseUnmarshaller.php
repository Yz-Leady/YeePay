<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeMerchantResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeMerchantResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMerchantResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeMerchantResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeMerchantResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeMerchantResponse();
    }
}

RegisterContributeMerchantResponseUnMarshaller::__init();

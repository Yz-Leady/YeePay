<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeMicroResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeMicroResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMicroResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeMicroResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeMicroResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeMicroResponse();
    }
}

RegisterContributeMicroResponseUnMarshaller::__init();

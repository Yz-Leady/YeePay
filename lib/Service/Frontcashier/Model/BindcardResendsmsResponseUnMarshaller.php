<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardResendsmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardResendsmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardResendsmsResponseUnMarshaller();
    }

    /**
     * @return BindcardResendsmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardResendsmsResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardResendsmsResponse();
    }

}

BindcardResendsmsResponseUnMarshaller::__init();

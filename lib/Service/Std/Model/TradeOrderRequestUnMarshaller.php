<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderRequestUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderRequestUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderRequestUnMarshaller();
    }

    /**
     * @return TradeOrderRequestUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return \Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderResponse
     */
    protected function getResponseInstance()
    {
        return new TradeOrderResponse();
    }

}

TradeOrderRequestUnMarshaller::__init();

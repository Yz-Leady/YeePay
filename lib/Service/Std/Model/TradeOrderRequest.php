<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeOrderRequest extends BaseRequest
{

    private $parentMerchantNo;

    private $merchantNo;

    private $orderId;

    private $orderAmount;

    private $notifyUrl;

    private $goodsParamExt;

    private $timeoutExpress;

    private $timeoutExpressType;

    private $requestDate;

    private $redirectUrl;

    private $paymentParamExt;

    private $industryParamExt;

    private $riskParamExt;

    private $memo;

    private $assureType;

    private $csUrl;

    private $fundProcessType;

    private $divideDetail;

    private $timeoutNotifyUrl;

    private $assurePeriod;

    private $queryParamsExt;

    public function __call($name, $arguments)
    {
        if (strlen($name) >= 3) {
            $fixed = strtolower(substr($name, 0, 3));
            $key   = '';
            if (strlen($name) > 3) {
                $key = lcfirst(substr($name, 3));
            }
            if ($fixed == 'get' && $key != '') {
                return $this->$key;
            } elseif ($fixed == 'set' && $key != '') {
                $value      = $arguments[0];
                $this->$key = $value;

                return $this;
            } elseif ($fixed == 'get' && $key == '') {
                $tkey = $arguments[0];

                return $this->$tkey;
            } elseif ($fixed == 'set' && $key == '') {
                $tkey        = $arguments[0];
                $value       = $arguments[1];
                $this->$tkey = $value;

                return $this;
            }
        }
    }

    public static function getOperationId()
    {
        return 'tradeOrder';
    }

}
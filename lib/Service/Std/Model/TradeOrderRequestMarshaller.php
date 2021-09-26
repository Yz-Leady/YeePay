<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TradeOrderRequestMarshaller implements RequestMarshaller
{

    /**
     * @var TradeOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderRequestMarshaller();
    }

    /**
     * @return TradeOrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Std';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/std/trade/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';

    /**
     * @param  \Yeepay\Yop\Sdk\Service\Std\Model\TradeOrderRequest  $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        $internalRequest->setYosFlag(true);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if ($request->get('parentMerchantNo') != null) {
            $internalRequest->addParameter('parentMerchantNo',
                ObjectSerializer::sanitizeForSerialization($request->get('parentMerchantNo'), 'string'));
        }
        if ($request->get('merchantNo') != null) {
            $internalRequest->addParameter('merchantNo',
                ObjectSerializer::sanitizeForSerialization($request->get('merchantNo'), 'string'));
        }
        if ($request->get('orderId') != null) {
            $internalRequest->addParameter('orderId',
                ObjectSerializer::sanitizeForSerialization($request->get('orderId'), 'string'));
        }
        if ($request->get('orderAmount') != null) {
            $internalRequest->addParameter('orderAmount',
                ObjectSerializer::sanitizeForSerialization($request->get('orderAmount'), 'string'));
        }
        if ($request->get('notifyUrl') != null) {
            $internalRequest->addParameter('notifyUrl',
                ObjectSerializer::sanitizeForSerialization($request->get('notifyUrl'), 'string'));
        }
        if ($request->get('goodsParamExt') != null) {
            $internalRequest->addParameter('goodsParamExt',
                ObjectSerializer::sanitizeForSerialization($request->get('goodsParamExt'), 'string'));
        }
        if ($request->get('timeoutExpress') != null) {
            $internalRequest->addParameter('timeoutExpress',
                ObjectSerializer::sanitizeForSerialization($request->get('timeoutExpress'), 'integer'));
        }
        if ($request->get('timeoutExpressType') != null) {
            $internalRequest->addParameter('timeoutExpressType',
                ObjectSerializer::sanitizeForSerialization($request->get('timeoutExpressType'), 'string'));
        }
        if ($request->get('requestDate') != null) {
            $internalRequest->addParameter('requestDate',
                ObjectSerializer::sanitizeForSerialization($request->get('requestDate'), 'string'));
        }
        if ($request->get('redirectUrl') != null) {
            $internalRequest->addParameter('redirectUrl',
                ObjectSerializer::sanitizeForSerialization($request->get('redirectUrl'), 'string'));
        }
        if ($request->get('paymentParamExt') != null) {
            $internalRequest->addParameter('paymentParamExt',
                ObjectSerializer::sanitizeForSerialization($request->get('paymentParamExt'), 'string'));
        }
        if ($request->get('industryParamExt') != null) {
            $internalRequest->addParameter('industryParamExt',
                ObjectSerializer::sanitizeForSerialization($request->get('industryParamExt'), 'string'));
        }
        if ($request->get('riskParamExt') != null) {
            $internalRequest->addParameter('riskParamExt',
                ObjectSerializer::sanitizeForSerialization($request->get('riskParamExt'), 'string'));
        }
        if ($request->get('memo') != null) {
            $internalRequest->addParameter('memo',
                ObjectSerializer::sanitizeForSerialization($request->get('memo'), 'string'));
        }
        if ($request->get('assureType') != null) {
            $internalRequest->addParameter('assureType',
                ObjectSerializer::sanitizeForSerialization($request->get('assureType'), 'string'));
        }
        if ($request->get('csUrl') != null) {
            $internalRequest->addParameter('csUrl',
                ObjectSerializer::sanitizeForSerialization($request->get('csUrl'), 'string'));
        }
        if ($request->get('fundProcessType') != null) {
            $internalRequest->addParameter('fundProcessType',
                ObjectSerializer::sanitizeForSerialization($request->get('fundProcessType'), 'string'));
        }
        if ($request->get('divideDetail') != null) {
            $internalRequest->addParameter('divideDetail',
                ObjectSerializer::sanitizeForSerialization($request->get('divideDetail'), 'string'));
        }
        if ($request->get('timeoutNotifyUrl') != null) {
            $internalRequest->addParameter('timeoutNotifyUrl',
                ObjectSerializer::sanitizeForSerialization($request->get('timeoutNotifyUrl'), 'string'));
        }
        if ($request->get('assurePeriod') != null) {
            $internalRequest->addParameter('assurePeriod',
                ObjectSerializer::sanitizeForSerialization($request->get('assurePeriod'), 'string'));
        }
        if ($request->get('queryParamsExt') != null) {
            $internalRequest->addParameter('queryParamsExt',
                ObjectSerializer::sanitizeForSerialization($request->get('queryParamsExt'), 'string'));
        }

        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }

}
TradeOrderRequestMarshaller::__init();

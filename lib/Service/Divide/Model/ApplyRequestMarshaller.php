<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ApplyRequestMarshaller implements RequestMarshaller
{

    /**
     * @var ApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyRequestMarshaller();
    }

    /**
     * @return ApplyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Divide';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/divide/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';

    /**
     * @param  ApplyRequest  $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if ($request->getParentMerchantNo() != null) {
            $internalRequest->addParameter('parentMerchantNo',
                ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if ($request->getMerchantNo() != null) {
            $internalRequest->addParameter('merchantNo',
                ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if ($request->getOrderId() != null) {
            $internalRequest->addParameter('orderId',
                ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if ($request->getUniqueOrderNo() != null) {
            $internalRequest->addParameter('uniqueOrderNo',
                ObjectSerializer::sanitizeForSerialization($request->getUniqueOrderNo(), 'string'));
        }
        if ($request->getDivideRequestId() != null) {
            $internalRequest->addParameter('divideRequestId',
                ObjectSerializer::sanitizeForSerialization($request->getDivideRequestId(), 'string'));
        }
        if ($request->getDivideDetail() != null) {
            $internalRequest->addParameter('divideDetail',
                ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if ($request->getAccountLinkInfo() != null) {
            $internalRequest->addParameter('accountLinkInfo',
                ObjectSerializer::sanitizeForSerialization($request->getAccountLinkInfo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }

}

ApplyRequestMarshaller::__init();

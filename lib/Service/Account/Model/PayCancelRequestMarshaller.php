<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class PayCancelRequestMarshaller implements RequestMarshaller
{

    /**
     * @var PayCancelRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayCancelRequestMarshaller();
    }

    /**
     * @return PayCancelRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/pay/cancel';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';

    /**
     * @param  PayCancelRequest  $request
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
        if ($request->getOrderNo() != null) {
            $internalRequest->addParameter('orderNo',
                ObjectSerializer::sanitizeForSerialization($request->getOrderNo(), 'string'));
        }
        if ($request->getCancelReason() != null) {
            $internalRequest->addParameter('cancelReason',
                ObjectSerializer::sanitizeForSerialization($request->getCancelReason(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }

}

PayCancelRequestMarshaller::__init();

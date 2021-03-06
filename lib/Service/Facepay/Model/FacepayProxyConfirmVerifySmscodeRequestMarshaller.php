<?php

namespace Yeepay\Yop\Sdk\Service\Facepay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FacepayProxyConfirmVerifySmscodeRequestMarshaller implements RequestMarshaller
{

    /**
     * @var FacepayProxyConfirmVerifySmscodeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyConfirmVerifySmscodeRequestMarshaller();
    }

    /**
     * @return FacepayProxyConfirmVerifySmscodeRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Facepay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/facepay/facepay-proxy/confirm-verify-smscode';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';

    /**
     * @param  FacepayProxyConfirmVerifySmscodeRequest  $request
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
        if ($request->getSmsCode() != null) {
            $internalRequest->addParameter('smsCode',
                ObjectSerializer::sanitizeForSerialization($request->getSmsCode(), 'string'));
        }
        if ($request->getBizSystem() != null) {
            $internalRequest->addParameter('bizSystem',
                ObjectSerializer::sanitizeForSerialization($request->getBizSystem(), 'string'));
        }
        if ($request->getMtToken() != null) {
            $internalRequest->addParameter('mtToken',
                ObjectSerializer::sanitizeForSerialization($request->getMtToken(), 'string'));
        }
        if ($request->getMemberNo() != null) {
            $internalRequest->addParameter('memberNo',
                ObjectSerializer::sanitizeForSerialization($request->getMemberNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }

}

FacepayProxyConfirmVerifySmscodeRequestMarshaller::__init();

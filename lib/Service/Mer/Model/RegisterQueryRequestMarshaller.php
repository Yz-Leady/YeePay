<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RegisterQueryRequestMarshaller implements RequestMarshaller
{

    /**
     * @var RegisterQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterQueryRequestMarshaller();
    }

    /**
     * @return RegisterQueryRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/mer/register/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';

    /**
     * @param  RegisterQueryRequest  $request
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
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);
        $internalRequest->addParameter('requestNo',
            ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        return $internalRequest;
    }

}

RegisterQueryRequestMarshaller::__init();

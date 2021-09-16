<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Yeepay\Yop\Sdk\Auth\SignerFactory;
use Yeepay\Yop\Sdk\Auth\SignOptions;
use Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Yeepay\Yop\Sdk\Http\ExecutionContext;
use Yeepay\Yop\Sdk\Model\Transform\ResponseUnMarshalParams;
use Yeepay\Yop\Sdk\Service\Common\Authority\MockAuthorityReqRegistry;

class Yop extends InitConfig
{

    protected $clientParams;

    public function __construct()
    {
        parent::__construct();

        $appSdkConfigProvider     = new DefaultAppSdkConfigProvider($this->getSdkConfig());
        $authorizationReqRegistry = new MockAuthorityReqRegistry();
        $this->clientParams       = ClientParamsSupport::generateClientParams($appSdkConfigProvider);
        $this->clientParams->setAuthorizationReqRegistry($authorizationReqRegistry);

    }

    public function sign()
    {
        $authorizationReq     = AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256');
        $signer               = SignerFactory::getSigner($authorizationReq->getSignerType());
        $signOptions          = new SignOptions($authorizationReq->getDigestAlg(),
            $authorizationReq->getProtocolPrefix());
        $httpExecutionContext = new ExecutionContext();
        $httpExecutionContext->setSigner($signer)->setSignOptions($signOptions);
        $ResponseUnMarshalParams = new ResponseUnMarshalParams();
        $ResponseUnMarshalParams->setSigner($signer)->setSignOptions($signOptions)
                                ->setPublicKey($this->clientParams->getCredentialsProvider()->getYopPublicKey($authorizationReq->getCredentialType()));

    }

    public function signSim(string $string)
    {
        $private_key =config('yeepay.isvPrivateKey');
        $private_key = "-----BEGIN RSA PRIVATE KEY-----\n" .
                       wordwrap($private_key, 64, "\n", true) .
                       "\n-----END RSA PRIVATE KEY-----";
        $privateKey = openssl_pkey_get_private($private_key);// 提取私钥

        openssl_sign($string, $encode_data, $privateKey, "SHA256");
        openssl_free_key($privateKey);
        $signToBase64 = Base64Url::encode($encode_data);
        $signToBase64 .= '$SHA256';
    }
}
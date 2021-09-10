<?php

namespace Leady\YeePay\Commands;

class InitConfig
{

    protected $params = [];

    public function __construct()
    {
        $this->app_key = config('yeepay.appKey');
        if (config('yeepay.secretKey', '')) {
            $this->aes_secret_key = config('yeepay.secretKey');
        }
        if (config('yeepay.secretKey', '')) {
            $this->encrypt_key = config('yeepay.encryptKey');
        }
        $this->server_root     = config('yeepay.serverRoot');
        $this->yos_server_root = config('yeepay.yosServerRoot');
        $this->yop_public_key  = [
            [
                'store_type' => config('yeepay.storeType'),
                'cert_type'  => config('yeepay.certType'),
                'value'      => config('yeepay.yopPublicKey'),
            ],
        ];
        $this->isv_private_key = [
            [
                'store_type' => config('yeepay.storeType'),
                'cert_type'  => config('yeepay.certType'),
                'value'      => config('yeepay.isvPrivateKey'),
            ],
        ];
        $this->http_client     = config('yeepay.httpClient');
    }

    public function getParams()
    {
        return $this->params;
    }

    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    public function __get($name)
    {
        return $this->params[$name] ?? '';
    }

}
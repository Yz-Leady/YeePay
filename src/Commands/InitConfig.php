<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Config\AppSdkConfig;

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

    public function getSdkConfig()
    {
        return new AppSdkConfig($this->params);
    }

    public function result()
    {

    }

    public function success($data)
    {
        return $this->message($data, 'SUCCESS', '成功', 200);
    }

    public function error($message, $code = 400)
    {
        return $this->message([], 'ERROR', $message, $code);
    }

    public function message($data, $state, $message, $code)
    {
        return [
            'code'    => $code,
            'state'   => $state,
            'message' => $message,
            'data'    => $data,
        ];
    }

    public function getJson($value)
    {
        if (is_array($value)) {
            return json_encode($value, JSON_UNESCAPED_UNICODE);
        } else {
            return $value;
        }
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
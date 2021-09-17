<?php

namespace Leady\YeePay\YopSign;

class YopSignUtils
{

    /**
     * 签名生成算法
     * @param  array  $params  API调用的请求参数集合的关联数组，不包含sign参数
     * @param  array  $ignoreParamNames  忽略的参数数组
     * @param  String  $secret  密钥
     * @param  String  $algName  加密算法
     * @return string 返回参数签名值
     */
    public static function sign($params, $ignoreParamNames = '', $secret, $algName = 'sha256')
    {
        $str           = '';  //待签名字符串
        $requestparams = $params;
        ksort($requestparams);
        foreach ($requestparams as $k => $v) {
            if (!in_array($k, $ignoreParamNames)) {
                if (!($v === null)) {
                    $str .= "$k$v";
                }
            }
        }
        //将签名密钥拼接到签名字符串两头
        $str = $secret.$str.$secret;
        //通过指定算法生成sing
        $signValue = hash($algName, $str);

        return $signValue;
    }

    /**
     * 签名验证算法
     * @param  array  $result  API调用的请求参数集合的关联数组，不包含sign参数
     * @param  String  $secret  密钥
     * @param  String  $algName  加密算法
     * @param  String  $sign  签名值
     * @return string 返回签名是否正确 0 - 如果两个字符串相等
     */
    public static function isValidResult($result, $secret, $algName, $sign)
    {
        $newString = $secret.$result.$secret;

        if (strcasecmp($sign, hash($algName, $newString)) == 0) {
            return true;
        } else {
            return false;
        }

    }

    public static function decrypt($source, $private_Key, $public_Key)
    {
        $private_key = "-----BEGIN RSA PRIVATE KEY-----\n".
                       wordwrap($private_Key, 64, "\n", true).
                       "\n-----END RSA PRIVATE KEY-----";

        extension_loaded('openssl') or die('php需要openssl扩展支持');
        /* 提取私钥 */
        $privateKey = openssl_get_privatekey($private_key);
        ($privateKey) or die('密钥不可用');
        //分解参数
        $args = explode('$', $source);

        if (count($args) != 4) {
            die('source invalid : ');
        }
        $encryptedRandomKeyToBase64 = $args[0];
        $encryptedDataToBase64      = $args[1];
        $symmetricEncryptAlg        = $args[2];
        $digestAlg                  = $args[3];
        //用私钥对随机密钥进行解密
        openssl_private_decrypt(Base64Url::decode($encryptedRandomKeyToBase64), $randomKey, $privateKey);
        openssl_free_key($privateKey);
        $encryptedData = openssl_decrypt(Base64Url::decode($encryptedDataToBase64), "AES-128-ECB", $randomKey,
            OPENSSL_RAW_DATA);
        //分解参数
        $signToBase64 = substr(strrchr($encryptedData, '$'), 1);
        $sourceData   = substr($encryptedData, 0, strlen($encryptedData) - strlen($signToBase64) - 1);
        $public_key   = "-----BEGIN PUBLIC KEY-----\n".
                        wordwrap($public_Key, 64, "\n", true).
                        "\n-----END PUBLIC KEY-----";
        $publicKey    = openssl_pkey_get_public($public_key);
        $res          = openssl_verify($sourceData, Base64Url::decode($signToBase64), $publicKey, $digestAlg); //验证
        openssl_free_key($publicKey);
        if ($res == 1) {
            return $sourceData;
        } else {
            die("verifySign fail!");
        }
    }

    public static function signRsa($source, $private_Key)
    {
        $private_key = "-----BEGIN RSA PRIVATE KEY-----\n".
                       wordwrap($private_Key, 64, "\n", true).
                       "\n-----END RSA PRIVATE KEY-----";
        extension_loaded('openssl') or die('php需要openssl扩展支持');
        /* 提取私钥 */
        $privateKey = openssl_get_privatekey($private_key);
        ($privateKey) or die('密钥不可用');
        openssl_sign($source, $encode_data, $privateKey, "SHA256");
        openssl_free_key($privateKey);
        $signToBase64 = Base64Url::encode($encode_data);
        $signToBase64 .= '$SHA256';

        return $signToBase64;
    }

    public static function getPrivateKey($filepath, $password)
    {
        $pkcs12 = file_get_contents($filepath);
        openssl_pkcs12_read($pkcs12, $certs, $password);
        $prikeyid = $certs['pkey']; //私钥
        $prikeyid = str_replace('-----BEGIN RSA PRIVATE KEY-----', '', $prikeyid);
        $prikeyid = str_replace('-----END RSA PRIVATE KEY-----', '', $prikeyid);
        $prikeyid = preg_replace("/(\r\n|\n|\r|\t)/i", '', $prikeyid);

        return $prikeyid;

    }

}
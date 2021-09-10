<?php
return [
    'serverRoot'    => 'https://openapi.yeepay.com/yop-center',
    'yosServerRoot' => 'https://openapi.yeepay.com/yop-center',
    'appKey'        => '',
    'secretKey'     => '',
    'encryptKey'    => '=',
    'storeType'     => 'string',
    'certType'      => 'RSA2048',
    'yopPublicKey'  => '',
    'isvPrivateKey' => '',
    'httpClient'    => [
        'connect_timeout'    => 10000,
        'read_timeout'       => 30000,
        'max_conn_total'     => 2000,
        'max_conn_per_route' => 1000,
    ],
];

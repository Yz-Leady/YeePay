<?php

namespace Leady\YeePay\Commands;

use Exception;
use Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayRequest;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAdd0Request;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQuery0Request;

class Aggpay extends InitConfig
{
	
	protected $client;
	
	public function __construct()
	{
		parent::__construct();
		$this->client = AggpayClientBuilder::builder($this->getSdkConfig())->build();
	}
	
	public function PrePay(array $data)
	{
		try {
			$request = new PrePayRequest();
			$request->setParentMerchantNo(config('yeepay.merchantNo'))
				->setMerchantNo(config('yeepay.merchantNo'))
				->setOrderId($data['orderId'] ?? '')
				->setOrderAmount($data['orderAmount'] ?? '')
				->setExpiredTime(now()->addMinutes(30)->toDateTimeString())
				->setNotifyUrl($data['notifyUrl'] ?? '')
				->setRedirectUrl($data['redirectUrl'] ?? '')
				->setMemo($data['memo'] ?? '')
				->setGoodsName($data['goodsName'] ?? '')
				->setPayWay($data['payWay'] ?? 'USER_SCAN')
				->setChannel($data['channel'] ?? '')
				->setUserIp($data['userIp'])
				->setFundProcessType($data['fundProcessType'] ?? 'REAL_TIME')
				->setAppId($data['appId'] ?? '')
				->setUserId($data['userId'] ?? '')
				->setScene('ONLINE');
			$response = $this->client->prePay($request);
			$result = $response->getResult();
			if ($result['code'] == '00000') {
				return $this->success($result);
			} else {
				return $this->error($result['returnMsg']);
			}
		} catch (Exception $e) {
			return $this->error($e->getMessage());
		}
		
	}
	
	public function WechatConfig(array $data)
	{
		$url = $this->getJson($data['url'] ?? '');
		$appId = $this->getJson($data['appId'] ?? '');
		
		$request = new WechatConfigAdd0Request();
		$request->setParentMerchantNo(config('yeepay.merchantNo'))
			->setMerchantNo(config('yeepay.merchantNo'))
			->setTradeAuthDirList($url)
			->setAppIdList($appId);
		$response = $this->client->wechatConfigAdd_0($request);
		$result = $response->getResult();
		if ($result['code'] == '00000') {
			return $this->success($result);
		} else {
			return $this->error($result['returnMsg']);
		}
	}
	
	public function WechatConfigQuery()
	{
		$request = new WechatConfigQuery0Request();
		$request->setParentMerchantNo(config('yeepay.merchantNo'))
			->setMerchantNo(config('yeepay.merchantNo'));
		$response = $this->client->wechatConfigQuery_0($request);
		$result = $response->getResult();
		if ($result['code'] == '00000') {
			return $this->success($result);
		} else {
			return $this->error($result['returnMsg']);
		}
	}
	
}
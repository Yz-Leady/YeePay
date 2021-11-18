<?php

namespace Leady\YeePay\Commands;

use Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder;
use Exception;
use Yeepay\Yop\Sdk\Service\Divide\Model\ApplyRequest;
use Yeepay\Yop\Sdk\Service\Divide\Model\CompleteRequest;

class Divide extends InitConfig
{
	protected $client;
	
	public function __construct()
	{
		parent::__construct();
		$this->client = DivideClientBuilder::builder($this->getSdkConfig())->build();
	}
	
	/**
	 * 申请分账
	 * @param array $data
	 *
	 * @return array
	 */
	public function apply(array $data)
	{
		try {
			$divideDetail = $this->getJson($data['divideDetail'] ?? '');
			
			$request = new ApplyRequest();
			$request->setParentMerchantNo(config('yeepay.merchantNo'))
				->setMerchantNo(config('yeepay.merchantNo'))
				->setOrderId($data['trade_no'])
				->setUniqueOrderNo($data['uniqueOrderNo'])
				->setDivideRequestId($data['divideRequestId'])
				->setDivideDetail($divideDetail);
			$response = $this->client->apply($request);
			$result = $response->getResult();
			if ($result['code'] == 'OPR00000') {
				return $this->success($result);
			} else {
				return $this->error($result['message']);
			}
		} catch (Exception $e) {
			return $this->error($e->getMessage());
		}
	}
	
	public function complete(array $data)
	{
		try {
			$request = new CompleteRequest();
			$request->setParentMerchantNo(config('yeepay.merchantNo'))
				->setMerchantNo(config('yeepay.merchantNo'))
				->setOrderId($data['trade_no'])
				->setUniqueOrderNo($data['uniqueOrderNo'])
				->setDivideRequestId($data['divideRequestId']);
			$response = $this->client->apply($request);
			$result = $response->getResult();
			if ($result['code'] == 'OPR00000') {
				return $this->success($result);
			} else {
				return $this->error($result['message']);
			}
		} catch (Exception $e) {
			return $this->error($e->getMessage());
		}
	}
}
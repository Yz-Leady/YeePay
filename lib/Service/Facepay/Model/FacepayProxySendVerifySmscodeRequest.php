<?php

namespace Yeepay\Yop\Sdk\Service\Facepay\Model;

use Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxySendVerifySmscodeRequest extends BaseRequest
{

    /**
     * @var string
     */
    private $bizNo;

    /**
     * @var string
     */
    private $bizToken;

    /**
     * @var string
     */
    private $bizSystem;

    /**
     * @var string
     */
    private $mtToken;

    /**
     * @var string
     */
    private $memberNo;

    /**
     * Gets bizNo
     * @return string
     */
    public function getBizNo()
    {
        return $this->bizNo;
    }

    /**
     * Sets bizNo
     * @param  string  $bizNo
     * @return FacepayProxySendVerifySmscodeRequest
     */
    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;

        return $this;
    }

    /**
     * Gets bizToken
     * @return string
     */
    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * Sets bizToken
     * @param  string  $bizToken
     * @return FacepayProxySendVerifySmscodeRequest
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken = $bizToken;

        return $this;
    }

    /**
     * Gets bizSystem
     * @return string
     */
    public function getBizSystem()
    {
        return $this->bizSystem;
    }

    /**
     * Sets bizSystem
     * @param  string  $bizSystem
     * @return FacepayProxySendVerifySmscodeRequest
     */
    public function setBizSystem($bizSystem)
    {
        $this->bizSystem = $bizSystem;

        return $this;
    }

    /**
     * Gets mtToken
     * @return string
     */
    public function getMtToken()
    {
        return $this->mtToken;
    }

    /**
     * Sets mtToken
     * @param  string  $mtToken
     * @return FacepayProxySendVerifySmscodeRequest
     */
    public function setMtToken($mtToken)
    {
        $this->mtToken = $mtToken;

        return $this;
    }

    /**
     * Gets memberNo
     * @return string
     */
    public function getMemberNo()
    {
        return $this->memberNo;
    }

    /**
     * Sets memberNo
     * @param  string  $memberNo
     * @return FacepayProxySendVerifySmscodeRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;

        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxySendVerifySmscode';
    }

}

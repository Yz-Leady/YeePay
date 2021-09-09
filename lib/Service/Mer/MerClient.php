<?php

namespace Yeepay\Yop\Sdk\Service\Mer;

use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClient
{

    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerClient constructor.
     * @param  ClientParams  $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param  Model\AuthStateQueryRequest  $request
     * @return Model\AuthStateQueryResponse
     * @throws YopClientException
     */
    public function authStateQuery(Model\AuthStateQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\AuthStateQueryRequestMarshaller::getInstance(),
            Model\AuthStateQueryResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\AuthorizeRelieveRequest  $request
     * @return Model\AuthorizeRelieveResponse
     * @throws YopClientException
     */
    public function authorizeRelieve(Model\AuthorizeRelieveRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\AuthorizeRelieveRequestMarshaller::getInstance(),
            Model\AuthorizeRelieveResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\AuthorizeSignRequest  $request
     * @return Model\AuthorizeSignResponse
     * @throws YopClientException
     */
    public function authorizeSign(Model\AuthorizeSignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\AuthorizeSignRequestMarshaller::getInstance(),
            Model\AuthorizeSignResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\BankAccountOpenRequest  $request
     * @return Model\BankAccountOpenResponse
     * @throws YopClientException
     */
    public function bankAccountOpen(Model\BankAccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\BankAccountOpenRequestMarshaller::getInstance(),
            Model\BankAccountOpenResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\MerchantDisposeQueryRequest  $request
     * @return Model\MerchantDisposeQueryResponse
     * @throws YopClientException
     */
    public function merchantDisposeQuery(Model\MerchantDisposeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\MerchantDisposeQueryRequestMarshaller::getInstance(),
            Model\MerchantDisposeQueryResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\MerchantDisposeUnfreezeRequest  $request
     * @return Model\MerchantDisposeUnfreezeResponse
     * @throws YopClientException
     */
    public function merchantDisposeUnfreeze(Model\MerchantDisposeUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\MerchantDisposeUnfreezeRequestMarshaller::getInstance(),
            Model\MerchantDisposeUnfreezeResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\MerchantWechatauthCancelRequest  $request
     * @return Model\MerchantWechatauthCancelResponse
     * @throws YopClientException
     */
    public function merchantWechatauthCancel(Model\MerchantWechatauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\MerchantWechatauthCancelRequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\MerchantWechatauthQueryRequest  $request
     * @return Model\MerchantWechatauthQueryResponse
     * @throws YopClientException
     */
    public function merchantWechatauthQuery(Model\MerchantWechatauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getApplymentId() == null) {
            throw new YopClientException("request.applymentId is required.");
        }
        if ($request->getSubMerchantNo() == null) {
            throw new YopClientException("request.subMerchantNo is required.");
        }
        if ($request->getReportFee() == null) {
            throw new YopClientException("request.reportFee is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\MerchantWechatauthQueryRequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\NotifyRepeatRequest  $request
     * @return Model\NotifyRepeatResponse
     * @throws YopClientException
     */
    public function notifyRepeat(Model\NotifyRepeatRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NotifyRepeatRequestMarshaller::getInstance(),
            Model\NotifyRepeatResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\ProductFeeModifyRequest  $request
     * @return Model\ProductFeeModifyResponse
     * @throws YopClientException
     */
    public function productFeeModify(Model\ProductFeeModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\ProductFeeModifyRequestMarshaller::getInstance(),
            Model\ProductFeeModifyResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\ProductFeeQueryRequest  $request
     * @return Model\ProductFeeQueryResponse
     * @throws YopClientException
     */
    public function productFeeQuery(Model\ProductFeeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\ProductFeeQueryRequestMarshaller::getInstance(),
            Model\ProductFeeQueryResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\ProductIncrementSettleOpenRequest  $request
     * @return Model\ProductIncrementSettleOpenResponse
     * @throws YopClientException
     */
    public function productIncrementSettleOpen(Model\ProductIncrementSettleOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\ProductIncrementSettleOpenRequestMarshaller::getInstance(),
            Model\ProductIncrementSettleOpenResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\RegisterContributeMerchantRequest  $request
     * @return Model\RegisterContributeMerchantResponse
     * @throws YopClientException
     */
    public function registerContributeMerchant(Model\RegisterContributeMerchantRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\RegisterContributeMerchantRequestMarshaller::getInstance(),
            Model\RegisterContributeMerchantResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\RegisterContributeMicroRequest  $request
     * @return Model\RegisterContributeMicroResponse
     * @throws YopClientException
     */
    public function registerContributeMicro(Model\RegisterContributeMicroRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\RegisterContributeMicroRequestMarshaller::getInstance(),
            Model\RegisterContributeMicroResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param  Model\RegisterQueryRequest  $request
     * @return Model\RegisterQueryResponse
     * @throws YopClientException
     */
    public function registerQuery(Model\RegisterQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request,
            Model\RegisterQueryRequestMarshaller::getInstance(),
            Model\RegisterQueryResponseUnMarshaller::getInstance());

        return $this->clientHandler->execute($clientExecutionParams);
    }

}

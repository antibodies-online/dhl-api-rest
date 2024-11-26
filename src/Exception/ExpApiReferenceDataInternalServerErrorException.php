<?php

namespace AntibodiesOnline\DHL\Api\Exception;

class ExpApiReferenceDataInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse
     */
    private $supermodelIoLogisticsExpressErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse $supermodelIoLogisticsExpressErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Process errors');
        $this->supermodelIoLogisticsExpressErrorResponse = $supermodelIoLogisticsExpressErrorResponse;
        $this->response = $response;
    }
    public function getSupermodelIoLogisticsExpressErrorResponse(): \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse
    {
        return $this->supermodelIoLogisticsExpressErrorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
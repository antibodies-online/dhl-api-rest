<?php

namespace AntibodiesOnline\DHL\Api\Exception;

class ExpApiServicepointsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\DHL\Api\Model\ExceptionResponse
     */
    private $exceptionResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\DHL\Api\Model\ExceptionResponse $exceptionResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Server Error');
        $this->exceptionResponse = $exceptionResponse;
        $this->response = $response;
    }
    public function getExceptionResponse(): \AntibodiesOnline\DHL\Api\Model\ExceptionResponse
    {
        return $this->exceptionResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
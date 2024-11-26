<?php

namespace AntibodiesOnline\DHL\Api\Model;

class RestResponseStatus extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Status/error code of the response
     *
     * @var int
     */
    protected $statusCode;
    /**
     * Status/error message text of the response
     *
     * @var string
     */
    protected $statusMessage;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var bool
     */
    protected $warning;
    /**
     * 
     *
     * @var bool
     */
    protected $errorStatus;
    /**
     * Status/error code of the response
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
    /**
     * Status/error code of the response
     *
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Status/error message text of the response
     *
     * @return string
     */
    public function getStatusMessage(): string
    {
        return $this->statusMessage;
    }
    /**
     * Status/error message text of the response
     *
     * @param string $statusMessage
     *
     * @return self
     */
    public function setStatusMessage(string $statusMessage): self
    {
        $this->initialized['statusMessage'] = true;
        $this->statusMessage = $statusMessage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOk(): bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWarning(): bool
    {
        return $this->warning;
    }
    /**
     * 
     *
     * @param bool $warning
     *
     * @return self
     */
    public function setWarning(bool $warning): self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getErrorStatus(): bool
    {
        return $this->errorStatus;
    }
    /**
     * 
     *
     * @param bool $errorStatus
     *
     * @return self
     */
    public function setErrorStatus(bool $errorStatus): self
    {
        $this->initialized['errorStatus'] = true;
        $this->errorStatus = $errorStatus;
        return $this;
    }
}
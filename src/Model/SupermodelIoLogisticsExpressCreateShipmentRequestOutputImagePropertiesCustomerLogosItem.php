<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem
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
     * Please specify image file format
     *
     * @var string
     */
    protected $fileFormat;
    /**
     * Please provide base64 encoded logo image
     *
     * @var string
     */
    protected $content;
    /**
     * Please specify image file format
     *
     * @return string
     */
    public function getFileFormat(): string
    {
        return $this->fileFormat;
    }
    /**
     * Please specify image file format
     *
     * @param string $fileFormat
     *
     * @return self
     */
    public function setFileFormat(string $fileFormat): self
    {
        $this->initialized['fileFormat'] = true;
        $this->fileFormat = $fileFormat;
        return $this;
    }
    /**
     * Please provide base64 encoded logo image
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Please provide base64 encoded logo image
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}
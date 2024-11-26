<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions
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
     * Length of the package
     *
     * @var float
     */
    protected $length;
    /**
     * Width of the package
     *
     * @var float
     */
    protected $width;
    /**
     * Height of the package
     *
     * @var float
     */
    protected $height;
    /**
     * Length of the package
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }
    /**
     * Length of the package
     *
     * @param float $length
     *
     * @return self
     */
    public function setLength(float $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * Width of the package
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }
    /**
     * Width of the package
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Height of the package
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
    /**
     * Height of the package
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}
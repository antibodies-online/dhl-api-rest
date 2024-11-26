<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Dimensions extends \ArrayObject
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
     * 
     *
     * @var float
     */
    protected $l;
    /**
     * 
     *
     * @var float
     */
    protected $w;
    /**
     * 
     *
     * @var float
     */
    protected $h;
    /**
     * 
     *
     * @return float
     */
    public function getL(): float
    {
        return $this->l;
    }
    /**
     * 
     *
     * @param float $l
     *
     * @return self
     */
    public function setL(float $l): self
    {
        $this->initialized['l'] = true;
        $this->l = $l;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getW(): float
    {
        return $this->w;
    }
    /**
     * 
     *
     * @param float $w
     *
     * @return self
     */
    public function setW(float $w): self
    {
        $this->initialized['w'] = true;
        $this->w = $w;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getH(): float
    {
        return $this->h;
    }
    /**
     * 
     *
     * @param float $h
     *
     * @return self
     */
    public function setH(float $h): self
    {
        $this->initialized['h'] = true;
        $this->h = $h;
        return $this;
    }
}
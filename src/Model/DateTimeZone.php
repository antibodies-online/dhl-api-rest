<?php

namespace AntibodiesOnline\DHL\Api\Model;

class DateTimeZone extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $fixed;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFixed(): bool
    {
        return $this->fixed;
    }
    /**
     * 
     *
     * @param bool $fixed
     *
     * @return self
     */
    public function setFixed(bool $fixed): self
    {
        $this->initialized['fixed'] = true;
        $this->fixed = $fixed;
        return $this;
    }
}
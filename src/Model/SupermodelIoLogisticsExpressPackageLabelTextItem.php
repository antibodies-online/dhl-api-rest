<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelTextItem
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
     * Position of the bespoke text
     *
     * @var string
     */
    protected $position;
    /**
     * Please enter caption to be printed in the tag value
     *
     * @var string
     */
    protected $caption;
    /**
     * Please enter value to be printed for the respective tag in caption
     *
     * @var string
     */
    protected $value;
    /**
     * Position of the bespoke text
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
    /**
     * Position of the bespoke text
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Please enter caption to be printed in the tag value
     *
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }
    /**
     * Please enter caption to be printed in the tag value
     *
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(string $caption): self
    {
        $this->initialized['caption'] = true;
        $this->caption = $caption;
        return $this;
    }
    /**
     * Please enter value to be printed for the respective tag in caption
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please enter value to be printed for the respective tag in caption
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}
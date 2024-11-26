<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem
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
     * Please enter remark text
     *
     * @var string
     */
    protected $value;
    /**
     * Please enter remark text
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please enter remark text
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
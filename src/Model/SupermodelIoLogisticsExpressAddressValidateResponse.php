<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponse
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
     * @var list<string>
     */
    protected $warnings;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressAddressValidateResponseAddressItem>
     */
    protected $address;
    /**
     * 
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressAddressValidateResponseAddressItem>
     */
    public function getAddress(): array
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressAddressValidateResponseAddressItem> $address
     *
     * @return self
     */
    public function setAddress(array $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}
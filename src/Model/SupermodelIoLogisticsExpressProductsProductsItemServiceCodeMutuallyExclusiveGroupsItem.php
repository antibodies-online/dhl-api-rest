<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem
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
     * Mutually exclusive serviceCode group name
     *
     * @var string
     */
    protected $serviceCodeRuleName;
    /**
     * Mutually exclusive serviceCode group description
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem>
     */
    protected $serviceCodes;
    /**
     * Mutually exclusive serviceCode group name
     *
     * @return string
     */
    public function getServiceCodeRuleName(): string
    {
        return $this->serviceCodeRuleName;
    }
    /**
     * Mutually exclusive serviceCode group name
     *
     * @param string $serviceCodeRuleName
     *
     * @return self
     */
    public function setServiceCodeRuleName(string $serviceCodeRuleName): self
    {
        $this->initialized['serviceCodeRuleName'] = true;
        $this->serviceCodeRuleName = $serviceCodeRuleName;
        return $this;
    }
    /**
     * Mutually exclusive serviceCode group description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Mutually exclusive serviceCode group description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem>
     */
    public function getServiceCodes(): array
    {
        return $this->serviceCodes;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem> $serviceCodes
     *
     * @return self
     */
    public function setServiceCodes(array $serviceCodes): self
    {
        $this->initialized['serviceCodes'] = true;
        $this->serviceCodes = $serviceCodes;
        return $this;
    }
}
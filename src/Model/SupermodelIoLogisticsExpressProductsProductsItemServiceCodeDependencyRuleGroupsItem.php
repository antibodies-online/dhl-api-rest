<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem
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
     * Dependent special service charge code where the rule groups are applied
     *
     * @var string
     */
    protected $dependentServiceCode;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem>
     */
    protected $dependencyRuleGroup;
    /**
     * Dependent special service charge code where the rule groups are applied
     *
     * @return string
     */
    public function getDependentServiceCode(): string
    {
        return $this->dependentServiceCode;
    }
    /**
     * Dependent special service charge code where the rule groups are applied
     *
     * @param string $dependentServiceCode
     *
     * @return self
     */
    public function setDependentServiceCode(string $dependentServiceCode): self
    {
        $this->initialized['dependentServiceCode'] = true;
        $this->dependentServiceCode = $dependentServiceCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem>
     */
    public function getDependencyRuleGroup(): array
    {
        return $this->dependencyRuleGroup;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem> $dependencyRuleGroup
     *
     * @return self
     */
    public function setDependencyRuleGroup(array $dependencyRuleGroup): self
    {
        $this->initialized['dependencyRuleGroup'] = true;
        $this->dependencyRuleGroup = $dependencyRuleGroup;
        return $this;
    }
}
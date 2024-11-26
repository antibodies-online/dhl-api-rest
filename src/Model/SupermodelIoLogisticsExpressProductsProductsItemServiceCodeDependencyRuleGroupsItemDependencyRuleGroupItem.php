<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem
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
     * Dependency rule group name
     *
     * @var string
     */
    protected $dependencyRuleName;
    /**
     * Dependency rule group description
     *
     * @var string
     */
    protected $dependencyDescription;
    /**
     * Dependency rule group condition statement
     *
     * @var string
     */
    protected $dependencyCondition;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem>
     */
    protected $requiredServiceCodes;
    /**
     * Dependency rule group name
     *
     * @return string
     */
    public function getDependencyRuleName(): string
    {
        return $this->dependencyRuleName;
    }
    /**
     * Dependency rule group name
     *
     * @param string $dependencyRuleName
     *
     * @return self
     */
    public function setDependencyRuleName(string $dependencyRuleName): self
    {
        $this->initialized['dependencyRuleName'] = true;
        $this->dependencyRuleName = $dependencyRuleName;
        return $this;
    }
    /**
     * Dependency rule group description
     *
     * @return string
     */
    public function getDependencyDescription(): string
    {
        return $this->dependencyDescription;
    }
    /**
     * Dependency rule group description
     *
     * @param string $dependencyDescription
     *
     * @return self
     */
    public function setDependencyDescription(string $dependencyDescription): self
    {
        $this->initialized['dependencyDescription'] = true;
        $this->dependencyDescription = $dependencyDescription;
        return $this;
    }
    /**
     * Dependency rule group condition statement
     *
     * @return string
     */
    public function getDependencyCondition(): string
    {
        return $this->dependencyCondition;
    }
    /**
     * Dependency rule group condition statement
     *
     * @param string $dependencyCondition
     *
     * @return self
     */
    public function setDependencyCondition(string $dependencyCondition): self
    {
        $this->initialized['dependencyCondition'] = true;
        $this->dependencyCondition = $dependencyCondition;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem>
     */
    public function getRequiredServiceCodes(): array
    {
        return $this->requiredServiceCodes;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem> $requiredServiceCodes
     *
     * @return self
     */
    public function setRequiredServiceCodes(array $requiredServiceCodes): self
    {
        $this->initialized['requiredServiceCodes'] = true;
        $this->requiredServiceCodes = $requiredServiceCodes;
        return $this;
    }
}
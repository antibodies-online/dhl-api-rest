<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem
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
     * Type of identifier
     *
     * @var string
     */
    protected $typeCode;
    /**
     * List of identifers
     *
     * @var list<string>
     */
    protected $list;
    /**
     * Type of identifier
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Type of identifier
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * List of identifers
     *
     * @return list<string>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * List of identifers
     *
     * @param list<string> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
}
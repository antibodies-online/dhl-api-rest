<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProducts
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
     * @var list<SupermodelIoLogisticsExpressProductsProductsItem>
     */
    protected $products;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItem>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItem> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
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
}
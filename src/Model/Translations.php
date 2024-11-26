<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Translations extends \ArrayObject
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
     * key value pairs representing the translations
     *
     * @var array<string, string>
     */
    protected $map;
    /**
     * key value pairs representing the translations
     *
     * @return array<string, string>
     */
    public function getMap(): iterable
    {
        return $this->map;
    }
    /**
     * key value pairs representing the translations
     *
     * @param array<string, string> $map
     *
     * @return self
     */
    public function setMap(iterable $map): self
    {
        $this->initialized['map'] = true;
        $this->map = $map;
        return $this;
    }
}
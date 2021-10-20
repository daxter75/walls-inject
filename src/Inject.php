<?php

class Inject
{
    protected array $initArray;
    protected string $afterKey;
    protected string $newKey;
    protected mixed $newValue;

    public function __construct($initArray, $afterKey, $newKey, $newValue)
    {
        $this->initArray = $initArray;
        $this->afterKey  = $afterKey;
        $this->newKey    = $newKey;
        $this->newValue  = $newValue;
    }

    public function getInjected(): array
    {
        return [];
    }
}
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
        $insert[$this->newKey] = $this->newValue;
        $arrayKeys = array_keys($this->initArray);

        if (array_search($this->newKey, $arrayKeys, true) !== false) {
            unset($this->initArray[$this->newKey]);
            $arrayKeys = array_keys($this->initArray);
        }

        $index = array_search($this->afterKey, $arrayKeys, true);
        $pos = $index === false ? count($this->initArray) : $index + 1;

        return
            array_slice($this->initArray, 0, $pos, true) +
            $insert +
            array_slice($this->initArray, $pos, count($this->initArray) - 1);
    }
}
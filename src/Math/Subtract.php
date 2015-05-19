<?php

namespace PSaunders88\MathCommand\Math;

class Subtract extends AbstractMath
{
    /**
     * Subtracts all the numbers in the values array and returns the result
     * 
     * @return integer|float
     */
    public function execute()
    {
        return array_reduce($this->values, function($carry, $item) {
            return $carry - $item;
        }, $this->initialValue);
    }
}

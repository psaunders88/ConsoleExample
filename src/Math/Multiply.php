<?php

namespace PSaunders88\MathCommand\Math;

class Multiply extends AbstractMath
{
    /**
     * Multiply all of the numbers in the values array and returns the result
     * Starting with the initial value
     * 
     * @return integer|float
     */
    public function execute()
    {
        return array_reduce($this->values, function($carry, $item) {
            return $carry * $item;
        }, $this->initialValue);
    }
}

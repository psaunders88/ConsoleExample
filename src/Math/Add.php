<?php

namespace PSaunders88\MathCommand\Math;

class Add extends AbstractMath
{
    /**
     * Add up all the numbers in the values array and returns the result 
     * 
     * @return integer|float
     */
    public function execute()
    {
        // We need to add the initial value to array to be included in the sum
        $this->values[] = $this->initialValue;
        
        return array_sum($this->values);
    }
}

<?php

namespace PSaunders88\MathCommand\Math;

class Divide extends AbstractMath
{
    /**
     * Given a starting value divide all of the values and return the result
     * 
     * @return integer|float
     */
    public function execute()
    {
        return array_reduce($this->values, function ($carry, $item) {
            if ($carry == 0 || $item == 0) {
                throw new \Exception("You can't divide by zero!!", 500);
            }
            return $carry / $item;
        }, $this->initialValue);
    }
}

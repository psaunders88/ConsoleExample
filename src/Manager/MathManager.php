<?php

namespace PSaunders88\MathCommand\Math\Manager;

use PSaunders88\MathCommand\Math\AbstractMath;

class MathManager
{
    /**
     * The object that actually performs the task
     * 
     * @var AbstractMath
     */
    protected $math;
    
    /**
     * Class constructor
     * 
     * @param AbstractMath $math
     */
    public function __construct(AbstractMath $math)
    {
        $this->math = $math;
    }
    
    /**
     * Compute the result
     * 
     * @param integer|float $initialValue
     * @param array         $values
     * 
     * @return integer|float
     */
    public function compute($initialValue = 0, array $values = [])
    {
        $this->math->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $this->math->addValue($value);
        }
        
        return $this->math->execute();
    }
}

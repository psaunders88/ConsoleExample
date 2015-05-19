<?php

namespace PSaunders88\MathCommand\Math;

abstract class AbstractMath
{
    /**
     * The value to start with
     * 
     * @var integer|float
     */
    protected $initialValue = 0;
    
    /**
     * The values to performa the operation on
     * 
     * @var integer|float[]
     */
    protected $values = [];
    
    /**
     * Set initial value
     * 
     * @param integer|float $value
     */
    public function setInitialValue($value)
    {
        $this->initialValue = $value;
    }
    
    /**
     * Add a value for processing
     * 
     * @param integer|float $value
     */
    public function addValue($value)
    {
        if (!is_numeric($value)) {
            throw new \Exception("The provided value should be numeric", '500');
        }
        
        $this->values[] = $value;
    }
    
    /**
     * Return the result of the operation
     * 
     * @return integer|float
     */
    public abstract function execute();
}
<?php

namespace PSaunders88\MathCommand\Math;

use PSaunders88\MathCommand\Math\AbstractMath;
use PSaunders88\MathCommand\Math\Add;
use PSaunders88\MathCommand\Math\Subtract;
use PSaunders88\MathCommand\Math\Multiply;
use PSaunders88\MathCommand\Math\Divide;

class MathFactory
{
    /**
     * Builds and returns a Math class
     * 
     * @param string $type The comes in the form of 
     * 
     * @return AbstractMath
     */
    public static function build($type)
    {
        switch (strtolower($type)) {
            case '+':
            case 'add':
                return new Add();
            case '-':
            case 'subtract':
                return new Subtract();
            case 'x':
            case 'multiply:':
                return new Multiply();
            case '/':
            case 'divide':
                return new Divide();
            default:
                throw new \Exception('Operator '.$type.' not recognised', 500);
        }
    }
}

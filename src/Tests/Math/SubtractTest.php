<?php

namespace PSaunders88\MathCommand\Tests\Math;

use PSaunders88\MathCommand\Math\Subtract;

class SubtractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestExecuteFixtures
     */
    public function testExecute($values, $total, $initialValue)
    {
        $substract = new Subtract();
        
        $substract->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $substract->addValue($value);
        }
        
        $result = $substract->execute();
        
        $this->assertEquals($result, $total);
    }
    
    public function getTestExecuteFixtures()
    {
        return [
            [[50, 50], -100, 0],
            [[1, 2], -3, 0],
            [[100, 1, 50], -151, 0],
        ];
    }
}

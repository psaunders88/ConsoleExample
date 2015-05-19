<?php

namespace PSaunders88\MathCommand\Tests\Math;

use PSaunders88\MathCommand\Math\Multiply;

class MultiplyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestExecuteFixtures
     */
    public function testExecute($values, $expectedOutput, $initialValue)
    {
        $multiply = new Multiply();
        
        $multiply->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $multiply->addValue($value);
        }
        
        $result = $multiply->execute();
        
        $this->assertEquals($expectedOutput, $result);
    }
    
    public function getTestExecuteFixtures()
    {
        return [
            [[2,5], 10, 1]
        ];
    }
}

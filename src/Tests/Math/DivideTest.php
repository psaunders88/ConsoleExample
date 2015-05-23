<?php

namespace PSaunders88\MathCommand\Tests\Math;

use PSaunders88\MathCommand\Math\Divide;

class DivideTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestExecuteFixtures
     */
    public function testExecute($values, $expectedOutput, $initialValue)
    {
        $divide = new Divide();
        
        $divide->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $divide->addValue($value);
        }
        
        $result = $divide->execute();
        
        $this->assertEquals($result, $expectedOutput);
    }
    
    /**
     * There are no values set to 0 (zero) in this set
     * This is because we arn't usnig this set for testing the expection
     * 
     * @return array
     */
    public function getTestExecuteFixtures()
    {
        return [
            [[2,5], 10, 100],
            [[5,2], 1, 10]
        ];
    }
    
    /**
     * @dataProvider          getTestExecuteExceptionFixtures
     * @expectedException     \Exception
     */
    public function testExcecuteException($values, $initialValue)
    {
        // An exception should be thrown if ever we try and divide by 0
        $divide = new Divide();
        $divide->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $divide->addValue($value);
        }
        
        $divide->execute();
    }
    
    /**
     * I've provided a zero in multiple positions to check that 
     * any of them should throw an exception
     * 
     * @return array
     */
    public function getTestExecuteExceptionFixtures()
    {
        return [
            [[0, 1], 1],
            [[1, 0], 1],
            [[1,1], 0]
        ];
    }
}

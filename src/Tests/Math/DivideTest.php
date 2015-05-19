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
        
        /**
         * Todo: If either the inital value or any of the
         *       items in the $values array are equal to 0 
         *       we should expect an exception
         */
        $divide->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $divide->addValue($value);
        }
        
        $result = $divide->execute();
        
        $this->assertEquals($result, $expectedOutput);
    }
    
    public function getTestExecuteFixtures()
    {
        return [
            //[[2, 1],5, 0]
            [[2,5], 10, 100],
            [[5,2], 1, 10]
        ];
    }
}
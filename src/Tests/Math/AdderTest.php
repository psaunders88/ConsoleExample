<?php

namespace PSaunders88\MathCommand\Tests\Math;

use PSaunders88\MathCommand\Math\Add;

class AdderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestExecuteFixtures
     */
    public function testExecute($values, $total, $initialValue)
    {
        $add = new Add();
        
        $add->setInitialValue($initialValue);
        
        foreach ($values as $value) {
            $add->addValue($value);
        }
        
        $result = $add->execute();
        
        $this->assertEquals($result, $total);
    }
    
    public function getTestExecuteFixtures()
    {
        return [
            [[50, 50], 100, 0],
            [[1, 1], 2, 0],
            [[1, 1, 98], 100, 0],
        ];
    }
}

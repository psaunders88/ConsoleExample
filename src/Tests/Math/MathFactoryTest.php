<?php

namespace PSaunders88\MathCommand\Tests;

use PSaunders88\MathCommand\Math\MathFactory;

class MathFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestBuildFixtures
     */
    public function testBuild($input, $expectedClass)
    {
        $result = MathFactory::build($input);
        $this->assertInstanceOf($expectedClass, $result);
    }
    
    public function getTestBuildFixtures()
    {
        return [
            ['+', 'PSaunders88\MathCommand\Math\Add'],
            ['-', 'PSaunders88\MathCommand\Math\Subtract'],
            ['x', 'PSaunders88\MathCommand\Math\Multiply'],
            ['/', 'PSaunders88\MathCommand\Math\Divide']
        ];
    }
}

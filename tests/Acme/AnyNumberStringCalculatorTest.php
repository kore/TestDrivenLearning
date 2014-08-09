<?php

namespace Acme;

/**
 * Allow the add() method to handle an unknown amount of numbers
 *
 * @group step2
 */
class AnyNumberStringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSumUpStringWithManyNumbers()
    {
        $calculator = new StringCalculator();
        $this->assertEquals(
            15,
            $calculator->add("1,2,3,4,5")
        );
    }
}

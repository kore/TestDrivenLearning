<?php

namespace Acme;

/**
 * Create a simple String calculator with a method add(<string> numbers)
 *
 * The method can take 0, 1 or 2 numbers, and will return their sum (for an
 * empty string it will return 0) for example "" or "1" or "1,2"
 *
 * @group step1
 */
class SimpleStringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSumEmptyString()
    {
        $calculator = new StringCalculator();
        $this->assertEquals(
            0,
            $calculator->add("")
        );
    }

    public function testSumUnaryString()
    {
        $calculator = new StringCalculator();
        $this->assertEquals(
            1,
            $calculator->add("1")
        );
    }

    public function testSumUpTwoNumbers()
    {
        $calculator = new StringCalculator();
        $this->assertEquals(
            3,
            $calculator->add("1,2")
        );
    }
}

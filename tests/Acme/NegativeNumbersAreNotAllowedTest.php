<?php

namespace Acme;

/**
 * Calling add() with a negative number will throw an exception "Negatives not
 * allowed" - and the negative that was passed.
 *
 * If there are multiple negatives, show all of them in the exception message.
 *
 * @group step5
 */
class NegativeNumbersAreNotAllowedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException UnexpectedValueException
     */
    public function testFailOnSingleNegativeNumber()
    {
        $calculator = new StringCalculator();
        $calculator->add("-1");
    }

    /**
     * @expectedException UnexpectedValueException
     * @expectedExceptionMessage Negatives no allowed, found: -1, -2
     */
    public function testEmbedAllFoundNegativeNumbersInExceptionMessage()
    {
        $calculator = new StringCalculator();
        $calculator->add("-1,-2");
    }
}

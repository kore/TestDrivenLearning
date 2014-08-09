<?php

namespace Acme;

/**
 * Support different delimiters to change a delimiter, the beginning of the
 * string will contain a separate line that looks like this:
 *
 * "//[delimiter]\n[numbers"]" for example "//;\n1;2" should return three where
 * the default delimiter is ";". The first line is optional.
 *
 * @group step4
 */
class UserDefinedDelimitersTest extends \PHPUnit_Framework_TestCase
{
    public function testUseCustomDelimiter()
    {
        $calculator = new StringCalculator();
        $this->assertSame(
            3,
            $calculator->add("//;\n1;2")
        );
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testFailOnInvalidDelimiter()
    {
        $calculator = new StringCalculator();
        $calculator->add("1;2");
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testFailOnDefaultDelimiterWhenUsingCustomDelimiters()
    {
        $calculator = new StringCalculator();
        $calculator->add("//;\n1,2");
    }
}

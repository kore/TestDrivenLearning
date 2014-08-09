<?php

namespace Acme;

/**
 * Allow the add() method to handle new lines between numbers (instead of
 * commas).
 *
 * * the following input is ok:  "1\n2,3"  (will equal 6)
 * * the following input is NOT ok:  "1,\n2", "1,\n"
 * * An empty number is also not OK: "1,"
 *
 * @group step3
 * @group step4
 * @group step5
 */
class LineBreakStringCalcualtorTest extends \PHPUnit_Framework_TestCase
{
    public function testSumUpStringWithLineBreak()
    {
        $calculator = new StringCalculator();
        $this->assertSame(
            6,
            $calculator->add("1\n2,3")
        );
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testFailOnStringWithDoubleSeprator()
    {
        $calculator = new StringCalculator();
        $calculator->add("1\n2,3");
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testFailOnStringWithSeperatorAtTheEnd()
    {
        $calculator = new StringCalculator();
        $calculator->add("1,");
    }
}

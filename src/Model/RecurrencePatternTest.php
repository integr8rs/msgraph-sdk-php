<?php

namespace Microsoft\Graph\Model;

class RecurrencePatternTest extends \PHPUnit_Framework_TestCase
{
    public function testGetDaysOfWeek()
    {
        $pattern = new RecurrencePattern(['daysOfWeek'=>['monday']]);
        $this->assertInstanceOf('array',$pattern->getDaysOfWeek());
        $this->assertCount(1,$pattern->getDaysOfWeek());
        foreach ($pattern->getDaysOfWeek() as $day) {
            $this->assertInstanceOf(DayOfWeek::class,$day);
            $this->assertEquals('monday',$day->value());
        }
    }
}

<?php

use Andrey9x\Dates\BirthDays;
use PHPUnit\Framework\TestCase;

final class BirthDaysTest extends TestCase
{
    public function testTodayZero()
    {
        $todayDate = date('Y-m-d');
        $days = new BirthDays($todayDate);
        $totalDays = $days->findTotalDays();

        $this->assertEquals(0, $totalDays);
    }

    public function testBackToYear()
    {
        $todayDate = date('Y-m-d', time() - 365 * 24 * 3600);
        $days = new BirthDays($todayDate);
        $totalDays = $days->findTotalDays();

        $this->assertEquals(365, $totalDays);
    }
}

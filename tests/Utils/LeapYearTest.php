<?php
namespace App\Test\Utils;

use App\Utils\LeapYearUtils;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    public function testReverse()
    {
        $years = [
            2016,
            2015,
            2000,
            1604,
            1603,
            1600,
            0,
            -4,
            -100,
            -400,
            -401
        ];
        $leapYear = new LeapYearUtils();
        foreach ($years as $year){
            $result = $leapYear->leapYear($year);

            $this->assertTrue($result == date('L',mktime(0,0,0,1,1,$year)));
        }
    }
}

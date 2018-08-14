<?php
namespace App\Utils;

/**
 * Class LeapYearUtils
 * @package App\Utils
 */
class LeapYearUtils
{
    /**
     * @param int|null $year
     * @return bool
     */
    public function leapYear(?int $year ): bool
    {
        if(!isset($year)){
            $year = date('Y',time());
        }

        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
    }
}

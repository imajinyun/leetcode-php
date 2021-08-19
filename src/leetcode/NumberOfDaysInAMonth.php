<?php

declare(strict_types=1);

namespace leetcode;

class NumberOfDaysInAMonth
{
    public static function numberOfDays(int $year, int $month): int
    {
        $days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) {
            $days[1] += 1;
        }

        return $days[$month - 1];
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class DayOfTheWeek
{
    public static function dayOfTheWeek(int $day, int $month, int $year): string
    {
        if (empty($day) || empty($month) || empty($year)) {
            return '';
        }

        $isLeapYear = static function (int $x): bool {
            return ($x % 400 === 0) || ($x % 4 === 0 && $x % 100 !== 0);
        };
        $days = -1; // Start from 1971-01-01, remove that day.
        $weeks = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $months = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        for ($i = 1971; $i < $year; $i++) {
            $day += $isLeapYear($i) ? 366 : 365;
        }
        $months[1] = $isLeapYear($year) ? 29 : $months[1];
        $days += array_sum(array_slice($months, 0, $month - 1)) + $day;

        return $weeks[(5 + $days) % 7]; // // Because it was Friday in 1971/1/1.
    }

    public static function dayOfTheWeek2(int $day, int $month, int $year): string
    {
        if (empty($day) || empty($month) || empty($year)) {
            return '';
        }
        $weeks = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        return $weeks[date('w', strtotime("{$year}-{$month}-{$day}"))];
    }
}

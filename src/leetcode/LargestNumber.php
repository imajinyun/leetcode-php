<?php

declare(strict_types=1);

namespace leetcode;

class LargestNumber
{
    public static function largestNumber(array $nums): string
    {
        if (empty($nums)) {
            return '';
        }
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if (self::compare($nums[$j], $nums[$j + 1]) < 0) {
                    [$nums[$j], $nums[$j + 1]] = [$nums[$j + 1], $nums[$j]];
                }
            }
        }
        if ((int)$nums[0] === 0) {
            return '0';
        }

        return (string)join('', $nums);
    }

    public static function largestNumber2(array $nums): string
    {
        if (empty($nums)) {
            return '';
        }
        usort($nums, static function ($a, $b) {
            return -(($a . $b) <=> ($b . $a));
        });
        if ((int)$nums[0] === 0) {
            return '0';
        }

        return (string)implode('', $nums);
    }

    private static function compare(int $a, int $b): int
    {
        return ($a . $b) <=> ($b . $a);
    }
}

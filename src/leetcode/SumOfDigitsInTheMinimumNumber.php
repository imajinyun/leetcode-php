<?php

declare(strict_types=1);

namespace leetcode;

class SumOfDigitsInTheMinimumNumber
{
    public static function sumOfDigits(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $min = PHP_INT_MAX;
        foreach ($nums as $num) {
            if ($num < $min) {
                $min = $num;
            }
        }
        $sum = 0;
        while ($min > 0) {
            $sum += $min % 10;
            $min /= 10;
        }

        return $sum % 2 === 0 ? 1 : 0;
    }
}

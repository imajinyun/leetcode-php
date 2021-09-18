<?php

declare(strict_types=1);

namespace leetcode;

class ValidPerfectSquare
{
    public static function isPerfectSquare(int $num): bool
    {
        if ($num <= 0) {
            return false;
        }
        [$low, $high] = [0, intdiv($num + 1, 2)];
        while ($low <= $high) {
            $mid = $low + intdiv($high - $low, 2);
            if ($mid * $mid > $num) {
                $high = $mid - 1;
            } elseif ($mid * $mid < $num) {
                $low = $mid + 1;
            } else {
                return true;
            }
        }

        return false;
    }

    public static function isPerfectSquare2(int $num): bool
    {
        if ($num <= 0) {
            return false;
        }
        $i = $n = 1;
        while ($n < $num) {
            $i++;
            $n = $i * $i;
        }

        return $n === $num;
    }
}

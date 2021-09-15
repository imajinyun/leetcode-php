<?php

declare(strict_types=1);

namespace leetcode;

class DivideTwoIntegers
{
    public static function divide(int $x, int $y): int
    {
        [$max, $min] = [2147483647, -2147483648];
        if ($x === $y) {
            return 1;
        }
        if ($y === 1) {
            return $x;
        }
        if ($x === 0) {
            return 0;
        }
        if ($x === $min && $y === -1) {
            return $max;
        }

        $sign = $x > 0 ^ $y > 0 ? -1 : 1;
        [$n, $x, $y] = [0, abs($x), abs($y)];
        while ($x >= $y) {
            [$t, $i] = [$y, 1];
            while ($x >= $t) {
                $x -= $t;
                $n += $i;
                $i <<= 1;
                $t <<= 1;
            }
        }
        if ($sign < 0) {
            $n = -$n;
        }

        return min(max($min, $n), $max);
    }

    public static function divide2(int $x, int $y): int
    {
        if ($x === (1 << 31) && $y === -1) {
            return (1 << 31) - 1;
        }
        $n = 0;
        [$a, $b] = [abs($x), abs($y)];
        while ($a - $b >= 0) {
            [$t, $i] = [$b, 1];
            while ($a - ($t << 1) >= 0) {
                $t <<= 1;
                $i <<= 1;
            }
            $a -= $t;
            $n += $i;
        }

        return ($x > 0) === ($y > 0) ? $n : -$n;
    }
}

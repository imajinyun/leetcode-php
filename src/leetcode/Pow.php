<?php

declare(strict_types=1);

namespace leetcode;

class Pow
{
    public static function myPow(float $x, int $n): float
    {
        if ($n === 0) {
            return 1;
        }

        if ($n < 0) {
            [$x, $n] = [1 / $x, -$n];
        }

        if ($n % 2 === 0) {
            $ans = self::myPow($x * $x, $n / 2);
        } else {
            $ans = $x * self::myPow($x * $x, intdiv($n, 2));
        }

        return $ans;
    }

    public static function myPow2(float $x, int $n): float
    {
        if ($n < 0) {
            [$x, $n] = [1 / $x, -$n];
        }
        $y = 1;
        while ($n) {
            if ($n & 1) { // n % 2 === 1
                $y *= $x;
            }
            $x *= $x; // x = x ^ 2
            $n >>= 1; // n /= 2
        }

        return $y;
    }

    public static function myPow3(float $x, int $n): float
    {
        if ($n == 0) {
            return 1;
        }
        if ($n < 0) {
            return 1 / self::myPow3($x, -$n);
        }
        $y = self::myPow3($x, intdiv($n, 2));

        return $n % 2 === 0 ? $y * $y : $y * $y * $x;
    }
}

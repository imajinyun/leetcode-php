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
            [$n, $x] = [-$n, 1 / $x];
        }

        if ($n % 2 === 0) {
            $ans = self::myPow($x * $x, $n / 2);
        } else {
            $ans = $x * self::myPow($x * $x, (int) ($n / 2));
        }

        return $ans;
    }

    public static function myPow2(float $x, int $n): float
    {
        if ($n < 0) {
            [$n, $x] = [-$n, 1 / $x];
        }
        $ans = 1;
        while ($n) {
            if ($n & 1) {
                $ans *= $x;
            }
            $x *= $x;
            $n >>= 1;
        }

        return $ans;
    }
}

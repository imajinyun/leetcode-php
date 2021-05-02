<?php

declare(strict_types=1);

namespace leetcode;

class FibonacciNumber
{
    public static function fib(int $n): int
    {
        if ($n <= 1) {
            return $n;
        }

        return self::fib($n - 1) + self::fib($n - 2);
    }

    public static function fib2(int $n): int
    {
        if ($n < 2) {
            return $n;
        }
        $dp = array_fill(0, $n + 1, 0);
        $dp[0] = 0;
        $dp[1] = 1;
        for ($i = 2; $i < $n + 1; $i++) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }

        return $dp[$n];
    }

    public static function fib3(int $n): int
    {
        if ($n < 2) {
            return $n;
        }
        [$a, $b, $c] = [0, 1, 0];
        for ($i = 1; $i < $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $c;
    }
}

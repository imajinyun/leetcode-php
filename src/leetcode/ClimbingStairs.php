<?php

declare(strict_types=1);

namespace leetcode;

class ClimbingStairs
{
    public static function climbStairs(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        if ($n === 1 || $n === 2) {
            return $n;
        }

        $dp = [1 => 1, 2 => 2];
        for ($i = 3; $i <= $n; ++$i) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }

        return $dp[$n];
    }

    public static function climbStairs2(int $n): int
    {
        if ($n <= 0) {
            return $n;
        }
        if ($n === 1 || $n === 2) {
            return $n;
        }
        [$prev, $curr] = [1, 1];
        for ($i = 2; $i < $n + 1; ++$i) {
            $temp = $curr;
            $curr = $prev + $curr;
            $prev = $temp;
        }

        return $curr;
    }
}

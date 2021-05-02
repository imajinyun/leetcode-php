<?php

declare(strict_types=1);

namespace leetcode;

class MinCostClimbingStairs
{
    public static function minCostClimbingStairs(array $cost)
    {
        $n = count($cost);
        if ($n <= 0) {
            return 0;
        }
        [$prev, $next] = [$cost[0], $cost[1]];
        if ($n <= 2) {
            return min($prev, $next);
        }
        for ($i = 2; $i < $n; ++$i) {
            $curr = $cost[$i] + min($prev, $next);
            $prev = $next;
            $next = $curr;
        }

        return min($prev, $next);
    }

    public static function minCostClimbingStairs2(array $cost)
    {
        $n = count($cost);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, 0);
        foreach ($cost as $i => $value) {
            if ($i < 2) {
                $dp[$i] = $value;
            } else {
                $dp[$i] = $value + min($dp[$i - 1], $dp[$i - 2]);
            }
        }

        return min($dp[$n - 1], $dp[$n - 2]);
    }
}

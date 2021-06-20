<?php

declare(strict_types=1);

namespace leetcode;

class MinimumTimeVisitingAllPoints
{
    public static function minTimeToVisitAllPoints(array $points): int
    {
        if (empty($points)) {
            return 0;
        }
        [$ans, $n] = [0, count($points)];
        for ($i = 1; $i < $n; $i++) {
            [$prev, $curr] = [$points[$i - 1], $points[$i]];
            $ans += max(abs($curr[0] - $prev[0]), abs($curr[1] - $prev[1]));
        }

        return $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class PaintHouse
{
    public static function minCost(array $costs): int
    {
        [$m, $n] = [count($costs), count($costs[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = $costs;
        for ($i = 1; $i < $m; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $dp[$i][$j] += min($dp[$i - 1][($j + 1) % 3], $dp[$i - 1][($j + 2) % 3]);
            }
        }

        return min(min($dp[$m - 1][0], $dp[$m - 1][1]), $dp[$m - 1][2]);
    }

    public static function minCost2(array $costs): int
    {
        [$m, $n] = [count($costs), count($costs[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = $costs;
        for ($i = 1; $i < $m; $i++) {
            $dp[$i][0] += min($dp[$i - 1][1], $dp[$i - 1][2]);
            $dp[$i][1] += min($dp[$i - 1][0], $dp[$i - 1][2]);
            $dp[$i][2] += min($dp[$i - 1][0], $dp[$i - 1][1]);
        }

        return min(min($dp[$m - 1][0], $dp[$m - 1][1]), $dp[$m - 1][2]);
    }
}

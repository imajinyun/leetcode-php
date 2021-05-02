<?php

declare(strict_types=1);

namespace leetcode;

use SplPriorityQueue;

class MinCostToConnectAllPoints
{
    public static function minCostConnectPoints(array $points): int
    {
        [$m, $n] = [count($points), is_array($points) ? count($points[0]) : 0];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $ans = $connected = $i = 0;
        $visited = array_fill(0, $m, false);
        $spq = new SplPriorityQueue();
        while (++$connected < $m) {
            $visited[$i] = true;
            for ($j = 0; $j < $m; $j++) {
                if (!$visited[$j]) {
                    $spq->insert([-abs($points[$i][0] - $points[$j][0]) + abs($points[$i][1] - $points[$j][1])], $j);
                }
            }
            while ($visited[$spq->top()]) {
                $spq->extract();
            }
            $ans -= $spq->top();
            $i = $spq->top();
            $spq->extract();
        }

        return $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class MinCostToConnectAllPoints
{
    public static function minCostConnectPoints(array $points): int
    {
        [$m, $n] = [count($points), is_array($points[0]) ? count($points[0]) : 0];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $ans = $key = 0;
        [$dist, $seen] = [array_fill(0, $m, PHP_INT_MAX), []];
        for ($i = 0; $i < $m - 1; $i++) {
            [$x, $y] = $points[$key];
            $seen[$key] = 1;
            foreach ($points as $j => $point) {
                if (isset($seen[$j])) {
                    continue;
                }
                [$p, $q] = $point;
                $dist[$j] = min($dist[$j], abs($p - $x) + abs($q - $y));
            }
            $val = min($dist);
            $key = array_search($val, $dist);
            $dist[$key] = PHP_INT_MAX;
            $ans += $val;
        }

        return $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class FourSumII
{
    public static function fourSumCount(array $a, array $b, array $c, array $d): int
    {
        if (empty($a) || empty($b) || empty($c) || empty($d)) {
            return 0;
        }
        if (count($a) !== count($b) ||
            count($b) !== count($c) ||
            count($c) !== count($d) ||
            count($d) !== count($a)) {
            return 0;
        }
        [$ans, $map] = [0, []];
        foreach ($a as $v1) {
            foreach ($b as $v2) {
                $sum = $v1 + $v2;
                $map[$sum] = ($map[$sum] ?? 0) + 1;
            }
        }

        foreach ($c as $v1) {
            foreach ($d as $v2) {
                $sum = -($v1 + $v2);
                $ans += $map[$sum] ?? 0;
            }
        }

        return $ans;
    }
}

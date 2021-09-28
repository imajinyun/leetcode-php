<?php

declare(strict_types=1);

namespace leetcode;

class IntersectionOfTwoArrays
{
    public static function intersection(array $p, array $q): array
    {
        if (empty($p) || empty($q)) {
            return [];
        }
        $map = $set = [];
        foreach ($p as $v) {
            if (!self::contains($map, $v)) {
                array_push($map, $v);
            }
        }
        foreach ($q as $v) {
            if (self::contains($map, $v) && !self::contains($set, $v)) {
                array_push($set, $v);
            }
        }

        return $set;
    }

    public static function intersection2(array $p, array $q): array
    {
        if (empty($p) || empty($q)) {
            return [];
        }
        sort($p);
        sort($q);
        $i = $j = 0;
        [$m, $n] = [count($p), count($q)];
        $ans = $set = [];
        while ($i < $m && $j < $n) {
            [$v1, $v2] = [$p[$i], $q[$j]];
            if ($v1 < $v2) {
                $i++;
            } elseif ($v1 > $v2) {
                $j++;
            } else {
                if (!self::contains($set, $v1)) {
                    array_push($set, $v1);
                }
                $i++;
                $j++;
            }
        }

        foreach ($p as $v) {
            if (self::contains($set, $v) && !self::contains($ans, $v)) {
                array_push($ans, $v);
            }
        }

        return $ans;
    }

    public static function intersection3(array $p, array $q): array
    {
        if (empty($p) || empty($q)) {
            return [];
        }
        $helper = static function (array $nums, int $target): bool {
            [$low, $high] = [0, count($nums) - 1];
            while ($low <= $high) {
                $mid = $low + intdiv($high - $low, 2);
                if ($nums[$mid] > $target) {
                    $high = $mid - 1;
                } elseif ($nums[$mid] < $target) {
                    $low = $mid + 1;
                } else {
                    return true;
                }
            }

            return false;
        };
        sort($p);
        $ans = [];
        foreach ($q as $v) {
            if ($helper($p, $v) && !self::contains($ans, $v)) {
                array_push($ans, $v);
            }
        }

        return $ans;
    }

    private static function contains(array $array, int $value): bool
    {
        return in_array($value, $array, true);
    }
}

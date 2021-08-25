<?php

declare(strict_types=1);

namespace leetcode;

class IntersectionOfTwoArraysII
{
    public static function intersect(array $p, array $q): array
    {
        if (empty($p) || empty($q)) {
            return [];
        }
        $ans = $map = [];
        foreach ($p as $v) {
            $map[$v] = ($map[$v] ?? 0) + 1;
        }

        foreach ($q as $v) {
            if (isset($map[$v]) && $map[$v]-- > 0) {
                array_push($ans, $v);
            }
        }
        sort($ans);

        return $ans;
    }

    public static function intersect2(array $p, array $q): array
    {
        if (empty($p) || empty($q)) {
            return [];
        }
        sort($p);
        sort($q);
        [$ans, $m, $n] = [[], count($p), count($q)];
        $i = $j = 0;
        while ($i < $m && $j < $n) {
            if ($p[$i] > $q[$j]) {
                $j++;
            } elseif ($p[$i] < $q[$j]) {
                $i++;
            } else {
                array_push($ans, $p[$i]);
                $i++;
                $j++;
            }
        }

        return $ans;
    }
}

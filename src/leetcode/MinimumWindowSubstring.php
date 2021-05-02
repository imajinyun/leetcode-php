<?php

declare(strict_types=1);

namespace leetcode;

class MinimumWindowSubstring
{
    public static function minWindow(string $s, string $t): string
    {
        [$m, $n, $map, $win] = [strlen($s), strlen($t), [], []];
        if ($m === 0 || $n === 0) {
            return '';
        }
        for ($i = 0; $i < $n; $i++) {
            $map[$t[$i]] = isset($map[$t[$i]]) ? $map[$t[$i]]++ : 0;
        }
        $left = $right = $match = $start = 0;
        $len = PHP_INT_MAX;
        while ($right < $m) {
            $c = $s[$right];
            $right++;
            if (isset($map[$c])) {
                $win[$c] = ($win[$c] ?? 0) + 1;
                if ($win[$c] === $map[$c]) {
                    $match++;
                }
            }
            while ($match === count($map)) {
                if ($right- $left < $len) {
                    $start = $left;
                    $len = $right - $left;
                }
                $d = $s[$left];
                $left++;
                if (count($map[$d])) {
                    if ($win[$d] === $map[$d]) {
                        $match--;
                    }
                    $win[$d]--;
                }
            }
        }

        return $len === PHP_INT_MAX ? '' : substr($start, $len);
    }
}

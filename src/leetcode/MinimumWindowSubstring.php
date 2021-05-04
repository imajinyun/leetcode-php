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
            $k = $t[$i];
            $map[$k] = ($map[$k] ?? 0) + 1;
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
                if ($right - $left < $len) {
                    $start = $left;
                    $len = $right - $left;
                }
                $d = $s[$left];
                $left++;
                if (isset($map[$d])) {
                    if ($win[$d] === $map[$d]) {
                        $match--;
                    }
                    $win[$d]--;
                }
            }
        }

        return $len === PHP_INT_MAX ? '' : substr($s, $start, $len);
    }

    public static function minWindow2(string $s, string $t): string
    {
        [$m, $n, $map] = [strlen($s), strlen($t), []];
        if ($m === 0 || $n === 0) {
            return '';
        }
        for ($i = 0; $i < $n; $i++) {
            $k = $t[$i];
            $map[$k] = ($map[$k] ?? 0) + 1;
        }
        $left = $right = $start = 0;
        $len = PHP_INT_MAX;
        while ($right < $m) {
            $c = $s[$right];
            $right++;
            if (isset($map[$c]) && $map[$c] > 0) {
                $n--;
            }
            $map[$c] = ($map[$c] ?? 0) - 1;
            while ($n === 0) {
                if ($right - $left < $len) {
                    $len = $right - $left;
                    $start = $left;
                }
                $d = $s[$left];
                $left++;
                $map[$d] = ($map[$d] ?? 0) + 1;
                if ($map[$d] > 0) {
                    $n++;
                }
            }
        }

        return $len === PHP_INT_MAX ? '' : substr($s, $start,  $len);
    }
}

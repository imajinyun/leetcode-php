<?php

declare(strict_types=1);

namespace leetcode;

class DuplicateZeros
{
    public static function duplicateZeros(array & $arr): void
    {
        if (empty($arr)) {
            return;
        }
        $cnt = 0;
        foreach ($arr as $num) {
            if ($num === 0) {
                $cnt++;
            }
        }
        [$m, $n] = [count($arr), count($arr) + $cnt];
        for ($i = $m - 1, $j = $n - 1; $i < $j; $i--, $j--) {
            if ($arr[$i] !== 0) {
                if ($j < $m) {
                    $arr[$j] = $arr[$i];
                }
            } else {
                if ($j < $m) {
                    $arr[$j]= $arr[$i];
                }
                $j--;
                if ($j < $m) {
                    $arr[$j] = $arr[$i];
                }
            }
        }
    }

    public static function duplicateZeros2(array & $arr): void
    {
        if (empty($arr)) {
            return;
        }
        [$n, $k] = [count($arr), 0];
        for ($i = 0; $k + $i < $n; $i++) {
            $k += $arr[$i] === 0 ? 1 : 0;
        }
        for ($i = $i - 1; $k > 0; $i--) {
            if ($i + $k < $n) {
                $arr[$i + $k] = $arr[$i];
            }
            if ($arr[$i] === 0) {
                $k--;
                $arr[$i + $k] = $arr[$i];
            }
        }
    }
}

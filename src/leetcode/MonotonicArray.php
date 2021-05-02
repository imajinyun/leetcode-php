<?php

declare(strict_types=1);

namespace leetcode;

class MonotonicArray
{
    public static function isMonotonic(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        $inc = $dec = true;
        for ($i = 1, $n = count($arr); $i < $n; $i++) {
            $inc &= $arr[$i - 1] <= $arr[$i];
            $dec &= $arr[$i - 1] >= $arr[$i];
        }
        return $inc || $dec;
    }

    public static function isMonotonic2(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        $inc = $dec = true;
        for ($i = 0, $n = count($arr) - 1; $i < $n; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $inc = false;
            }
            if ($arr[$i] < $arr[$i + 1]) {
                $dec = false;
            }
            if ($inc === false && $dec === false) {
                return false;
            }
        }

        return true;
    }
}

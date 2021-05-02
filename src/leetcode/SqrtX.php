<?php

declare(strict_types=1);

namespace leetcode;

class SqrtX
{
    public static function sqrt(int $x): int
    {
        if ($x < 0) {
            return 0;
        }
        if ($x === 0 || $x === 1) {
            return $x;
        }
        [$ans, $left, $right] = [0, 1, $x];
        while ($left <= $right) {
            $middle = $left + (int)floor(($right - $left) / 2);
            if ($middle > $x / $middle) {
                $right = $middle - 1;
            } elseif ($middle < $x / $middle) {
                $left = $middle + 1;
                $ans = $middle;
            } else {
                return $middle;
            }
        }

        return $ans;
    }
}

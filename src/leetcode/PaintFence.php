<?php

declare(strict_types=1);

namespace leetcode;

class PaintFence
{
    public static function numWays(int $n, int $k): int
    {
        if ($n <= 0 || $k <= 0) {
            return 0;
        }
        [$same, $diff] = [0, $k];
        for ($i = 2; $i <= $n; $i++) {
            $temp = $diff;
            $diff = ($same + $diff) * ($k - 1);
            $same = $temp;
        }

        return $same + $diff;
    }

    public static function numWays2(int $n, int $k): int
    {
        if ($n <= 0 || $k <= 0) {
            return 0;
        }
        if ($n > 2 && $k === 1) {
            return 0;
        }
        if ($n === 1) {
            return $k;
        }
        $same = $diff = array_fill(0, $n, 0);
        $same[0] = $k;
        $same[1] = $k;
        $diff[0] = $k;
        $diff[1] = $diff[0] * ($k - 1);
        for ($i = 2; $i < $n; $i++) {
            $same[$i] = $diff[$i - 1];
            $diff[$i] = ($same[$i - 1] + $diff[$i - 1]) * ($k - 1);
        }

        return $same[$n - 1] + $diff[$n - 1];
    }

    public static function numWays3(int $n, int $k)
    {
        if ($n <= 0 || $k <= 0) {
            return 0;
        }
        if ($n === 1) {
            return $k;
        }
        if ($n === 2) {
            return $k * $k;
        }
        [$same, $diff] = [$k, $k * ($k - 1)];
        for ($i = 3; $i <= $n; $i++) {
            $temp = ($same + $diff) * ($k - 1);
            $same = $diff;
            $diff = $temp;
        }

        return $same + $diff;
    }
}

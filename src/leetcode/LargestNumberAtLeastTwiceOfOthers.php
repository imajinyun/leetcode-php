<?php

declare(strict_types=1);

namespace leetcode;

class LargestNumberAtLeastTwiceOfOthers
{
    public static function dominantIndex(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$index, $n] = [0, count($nums)];
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] > $nums[$index]) {
                $index = $i;
            }
        }

        for ($i = 0; $i < $n; $i++) {
            if ($index !== $i && $nums[$index] < 2 * $nums[$i]) {
                return -1;
            }
        }

        return $index;
    }

    public static function dominantIndex2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $key = $max = $sub = -1;
        foreach ($nums as $i => $num) {
            if ($num > $max) {
                $sub = $max;
                $max = $num;
                $key = $i;
            } elseif ($num > $sub) {
                $sub = $num;
            }
        }

        return 2 * $sub <= $max ? $key : -1;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class RangeSumQueryImmutable
{
    public static function sumRange(array $nums, int $start, int $end): int
    {
        $n = count($nums);
        if ($n <= 0 || $start > $end || $start > $n || $end > $n) {
            return 0;
        }
        $ans = 0;
        for ($i = $start; $i <= $end; ++$i) {
            $ans += $nums[$i];
        }

        return $ans;
    }

    public static function sumRange2(array $nums, int $i, int $j)
    {
        $n = count($nums);
        if ($n <= 0 || $i > $j || $i > $n || $j > $n) {
            return 0;
        }

        $helper = static function (array $map) use ($n) {
            for ($i = 1; $i < $n; ++$i) {
                $map[$i] += $map[$i - 1];
            }

            return $map;
        };
        $map = $helper($nums);

        return $i === 0 ? $map[$j] : $map[$j] - $map[$i - 1];
    }
}

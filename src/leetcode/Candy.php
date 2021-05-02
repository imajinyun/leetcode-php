<?php

declare(strict_types=1);

namespace leetcode;

class Candy
{
    public static function candy(array $ratings): int
    {
        $n = count($ratings);
        if ($n === 0) {
            return 0;
        }
        $nums = array_fill(0, $n, 1);
        for ($i = 1; $i < $n; $i++) {
            if ($ratings[$i] > $ratings[$i - 1]) {
                $nums[$i] = $nums[$i - 1] + 1;
            }
        }
        for ($i = $n - 2; $i >= 0; $i--) {
            if ($ratings[$i] > $ratings[$i + 1]) {
                $nums[$i] = max($nums[$i], $nums[$i + 1] + 1);
            }
        }

        return array_sum($nums);
    }
}

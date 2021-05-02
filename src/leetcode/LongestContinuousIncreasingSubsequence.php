<?php

declare(strict_types=1);

namespace leetcode;

class LongestContinuousIncreasingSubsequence
{
    public static function findLengthOfLCIS(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $res = $cnt = 0;
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            if ($i === 0 || $nums[$i] > $nums[$i - 1]) {
                $res = max($res, ++$cnt);
            } else {
                $cnt = 1;
            }
        }

        return $res;
    }

    public static function findLengthOfLCIS2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $n = count($nums);
        $dp = array_fill(0, $n, 1);
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                $dp[$i] = $dp[$i - 1] + 1;
            }
        }

        return max($dp);
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class MaximumSubarray
{
    public static function maxSubArray(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$ans, $n] = [PHP_INT_MIN, count($nums)];
        for ($i = 0; $i < $n; $i++) {
            $sum = 0;
            for ($j = $i; $j < $n; $j++) {
                $sum += $nums[$j];
                $ans = max($ans, $sum);
            }
        }

        return $ans;
    }

    public static function maxSubArray2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }

        [$ans, $sum] = [$nums[0], 0];
        foreach ($nums as $num) {
            $sum = max($sum + $num, $num);
            $ans = max($ans, $sum);
        }

        return $ans;
    }

    public static function maxSubArray3(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $n = count($nums);
        $dp = array_fill(0, $n, 0);
        $dp[0] = $nums[0];
        for ($i = 1; $i < $n; $i++) {
            $dp[$i] = max($dp[$i - 1] + $nums[$i], $nums[$i]);
        }

        return max($dp);
    }
}

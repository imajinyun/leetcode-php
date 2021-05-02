<?php

declare(strict_types=1);

namespace leetcode;

class HouseRobber
{
    public static function rob(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n + 1, 0);
        foreach ($nums as $i => $num) {
            if ($i - 1 < 0) {
                [$dp[0], $dp[1]] = [0, $num];
            } else {
                $dp[$i + 1] = max($dp[$i], $dp[$i - 1] + $num);
            }
        }

        return $dp[$n];
    }

    public static function rob2(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        [$prev, $curr] = [0, 0];
        foreach ($nums as $num) {
            $temp = $curr;
            $curr = max($curr, $prev + $num);
            $prev = $temp;
        }

        return $curr;
    }

    public static function rob3(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, 0);
        $dp[0] = $nums[0];
        $dp[1] = max($nums[0], $nums[1]);
        for ($i = 2; $i < $n; ++$i) {
            $dp[$i] = max($dp[$i - 1], $dp[$i - 2] + $nums[$i]);
        }

        return $dp[$n - 1];
    }
}

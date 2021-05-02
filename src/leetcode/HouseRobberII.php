<?php

declare(strict_types=1);

namespace leetcode;

class HouseRobberII
{
    public static function rob(array $nums): int
    {
        $n = count($nums);
        if ($n === 0) {
            return 0;
        }
        if ($n === 1) {
            return $nums[0];
        }
        if ($n === 2) {
            return max($nums[0], $nums[1]);
        }
        $prev = self::helper($nums, 0, $n - 2);
        $next = self::helper($nums, 1, $n - 1);

        return max($prev, $next);
    }

    public static function rob2(array $nums): int
    {
        $n = count($nums);
        if ($n === 0) {
            return 0;
        }
        if ($n === 1) {
            return $nums[0];
        }
        if ($n === 2) {
            return max($nums[0], $nums[1]);
        }
        $prev = $next = array_fill(0, $n + 1, 0);
        [$prev[0], $prev[1], $next[0], $next[1]] = [0, $nums[0], 0, 0];
        for ($i = 2; $i <= $n; $i++) {
            $prev[$i] = max($prev[$i - 1], $prev[$i - 2] + $nums[$i - 1]);
            $next[$i] = max($next[$i - 1], $next[$i - 2] + $nums[$i - 1]);
        }

        return max($prev[$n - 1], $next[$n]);
    }

    private static function helper(array $nums, int $start, int $end): int
    {
        $prev = $nums[$start];
        $next = max($prev, $nums[$start + 1]);
        $result = $next;
        for ($i = $start + 2; $i <= $end; $i++) {
            $result = max($prev + $nums[$i], $next);
            $prev = $next;
            $next = $result;
        }

        return $result;
    }
}

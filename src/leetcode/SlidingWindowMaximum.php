<?php

declare(strict_types=1);

namespace leetcode;

class SlidingWindowMaximum
{
    public static function maxSlidingWindow(array $nums, int $k): array
    {
        $ans = [];
        if (empty($nums) || $k <= 0) {
            return $ans;
        }
        for ($i = $k - 1, $n = count($nums); $i < $n; $i++) {
            $max = $nums[$i];
            for ($j = 1; $j < $k; $j++) {
                if ($nums[$i - $j] > $max) {
                    $max = $nums[$i - $j];
                }
            }
            $ans[$i - $k + 1] = $max;
        }

        return $ans;
    }

    public static function maxSlidingWindow2(array $nums, int $k): array
    {
        $ans = [];
        if (empty($nums) || $k <= 0) {
            return $ans;
        }
        $queue = [];
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            if (!empty($queue) && current($queue) === $i - $k) {
                array_shift($queue);
            }
            while (!empty($queue) && $nums[$queue[count($queue) - 1]] < $nums[$i]) {
                array_pop($queue);
            }
            $queue[] = $i;
            if ($i >= $k - 1) {
                $ans[] = $nums[current($queue)];
            }
        }

        return $ans;
    }
}

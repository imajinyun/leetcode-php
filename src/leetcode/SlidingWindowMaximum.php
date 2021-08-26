<?php

declare(strict_types=1);

namespace leetcode;

class SlidingWindowMaximum
{
    /**
     * Note: Time Limit Exceeded.
     *
     * @param array $nums
     * @param int $k
     *
     * @return array
     */
    public static function maxSlidingWindow(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }
        $ans = [];
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

    /**
     * Note: Time Limit Exceeded.
     *
     * @param array $nums
     * @param int $k
     *
     * @return array
     */
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

    public static function maxSlidingWindow3(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }
        [$ans, $queue] = [[], new \SplMaxHeap()];
        foreach ($nums as $i => $num) {
            while (!$queue->isEmpty() && $queue->top()[1] <= $i - $k) {
                $queue->extract();
            }
            $queue->insert([$num, $i]);
            if ($i >= $k - 1) {
                array_push($ans, $queue->top()[0]);
            }
        }

        return $ans;
    }

    public static function maxSlidingWindow4(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }

        [$ans, $queue] = [[], new \SplPriorityQueue()];
        $queue->setExtractFlags($queue::EXTR_BOTH);
        foreach ($nums as $i => $num) {
            while (!$queue->isEmpty() && $queue->top()['data'][1] <= $i - $k) {
                $queue->extract();
            }
            $queue->insert([$num, $i], $num);
            if ($i >= $k - 1) {
                array_push($ans, $queue->top()['data'][0]);
            }
        }

        return $ans;
    }
}

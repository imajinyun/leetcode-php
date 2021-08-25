<?php

declare(strict_types=1);

namespace leetcode;

class KthLargestElementInAnArray
{
    public static function findKthLargest(array $nums, int $k): int
    {
        if (empty($nums) || $k <= 0) {
            return 0;
        }
        sort($nums);

        return $nums[count($nums) - $k];
    }

    public static function findKthLargest2(array $nums, int $k): int
    {
        if (empty($nums) || $k <= 0) {
            return 0;
        }
        $queue = new \SplMinHeap();
        foreach ($nums as $num) {
            $queue->insert($num);
            if ($queue->count() > $k) {
                $queue->extract();
            }
        }

        return $queue->top();
    }
}

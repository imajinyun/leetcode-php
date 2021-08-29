<?php

declare(strict_types=1);

namespace leetcode;

class FindTheDuplicateNumber
{
    public static function findDuplicate(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $map = array_count_values($nums);

        return array_search(max($map), $map, true);
    }

    public static function findDuplicate2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $map = [];
        foreach ($nums as $num) {
            $map[$num] = ($map[$num] ?? 0) + 1;
        }

        return array_search(max($map), $map, true);
    }

    public static function findDuplicate3(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$low, $high] = [$nums[0], count($nums) - 1];
        while ($low < $high) {
            [$cnt, $mid] = [0, $low + (int)(($high - $low) / 2)];
            foreach ($nums as $num) {
                if ($num <= $mid) {
                    $cnt++;
                }
            }
            $cnt <= $mid ? ($low = $mid  + 1) : ($high = $mid);
        }

        return $low;
    }

    public static function findDuplicate4(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$slow, $fast] = [$nums[0], $nums[$nums[0]]];
        while ($slow !== $fast) {
            $slow = $nums[$slow];
            $fast = $nums[$nums[$fast]];
        }

        $fast = 0;
        while ($slow !== $fast) {
            $fast = $nums[$fast];
            $slow = $nums[$slow];
        }

        return $slow;
    }
}

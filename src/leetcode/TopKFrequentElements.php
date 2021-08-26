<?php

declare(strict_types=1);

namespace leetcode;

class TopKFrequentElements
{
    public static function topKFrequent(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }
        $map = array_count_values($nums);
        arsort($map);

        $keys = array_keys($map);
        if ($k > count($map)) {
            return $keys;
        }

        return array_slice($keys, 0, $k);
    }

    public static function topKFrequent2(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }
        $ans = $map = [];
        foreach ($nums as $num) {
            $map[$num] = ($map[$num] ?? 0) + 1;
        }
        arsort($map);

        $keys = array_keys($map);
        if ($k > count($map)) {
            return $keys;
        }

        for ($i = 0; $i < $k; $i++) {
            array_push($ans, array_shift($keys));
        }

        return $ans;
    }

    public static function topKFrequent3(array $nums, int $k): array
    {
        if (empty($nums) || $k <= 0) {
            return [];
        }
        $ans = $map = [];
        $map = array_count_values($nums);
        $heap = new \SplPriorityQueue();
        foreach ($map as $key => $val) {
            $heap->insert($key, $val);
        }
        for ($i = 0; $i < $k; $i++) {
            array_push($ans, $heap->extract());
        }

        return $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class NextGreaterElementII
{
    public static function nextGreaterElements(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$ans, $stack] = [array_fill(0, $n, -1), []];
        for ($i = 0; $i < $n * 2; $i++) {
            $k = $i % $n;
            while ($stack && $nums[end($stack)] < $nums[$k]) {
                $ans[array_pop($stack)] = $nums[$k];
            }
            array_push($stack, $k);
        }

        return $ans;
    }

    public static function nextGreaterElements2(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$ans, $stack] = [array_fill(0, $n, -1), []];
        for ($i = 0; $i < $n; $i++) {
            while ($stack && $nums[end($stack)] < $nums[$i]) {
                $ans[array_pop($stack)] = $nums[$i];
            }
            array_push($stack, $i);
        }

        for ($i = 0; $i < $n; $i++) {
            while ($stack && $nums[end($stack)] < $nums[$i]) {
                $ans[array_pop($stack)] = $nums[$i];
            }
            if (empty($stack)) {
                break;
            }
        }

        return $ans;
    }
}

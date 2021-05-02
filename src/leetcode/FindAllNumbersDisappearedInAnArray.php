<?php

declare(strict_types=1);

namespace leetcode;

class FindAllNumbersDisappearedInAnArray
{
    public static function findDisappearedNumbers(array $nums): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        foreach ($nums as $key => $num) {
            if ($num === $key + 1) { // 当前元素出现在它该出现的位置，无需交换
                continue;
            }
            $idx = $num - 1; // $idx 为当前元素应该出现的位置
            if ($num === $nums[$idx]) {
                continue;
            }
            [$nums[$idx], $num] = [$num, $nums[$idx]];
        }
        foreach ($nums as $key => $num) {
            if ($num !== $key + 1) {
                $ans[] = $key + 1;
            }
        }

        return $ans;
    }

    public static function findDisappearedNumbers2(array $nums): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        $n = count($nums);
        foreach ($nums as $key => $num) {
            $nums[($num - 1) % $n] += $n;
        }
        foreach ($nums as $key => $num) {
            if ($num <= $n) {
                $ans[] = $key + 1;
            }
        }

        return $ans;
    }
}

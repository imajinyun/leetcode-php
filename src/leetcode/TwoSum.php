<?php

declare(strict_types=1);

namespace leetcode;

class TwoSum
{
    public static function twoSum(array $nums, int $target): array
    {
        $ans = [];
        $length = count($nums);
        foreach ($nums as $i => $item) {
            $flag = false;
            for ($j = $i + 1; $j < $length; $j++) {
                $sum = $nums[$i] + $nums[$j];
                if ($target === $sum) {
                    $flag = true;
                    $ans = [$i, $j];
                    break;
                }
            }

            if ($flag) {
                break;
            }
        }

        return $ans;
    }

    public static function twoSum2(array $nums, int $target): array
    {
        $ans = $map = [];
        foreach ($nums as $key => $val) {
            $index = $target - $nums[$key];
            if (isset($map[$index])) {
                $ans = [$map[$index], $key];
            } else {
                $map[$val] = $key;
            }

            if ($ans) {
                break;
            }
        }

        return $ans;
    }
}

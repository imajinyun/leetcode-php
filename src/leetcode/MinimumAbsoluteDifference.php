<?php

declare(strict_types=1);

namespace leetcode;

class MinimumAbsoluteDifference
{
    public static function minimumAbsDifference(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        sort($arr);
        [$n, $min] = [count($arr), PHP_INT_MAX];
        for ($i = 0; $i < $n - 1; $i++) {
            $val = $arr[$i + 1] - $arr[$i];
            if ($val < $min) {
                $min = $val;
                $ans[] = [$arr[$i], $arr[$i + 1]];
            } else if ($val === $min) {
                $ans[] = [$arr[$i], $arr[$i + 1]];
            }
        }

        return $ans;
    }
}

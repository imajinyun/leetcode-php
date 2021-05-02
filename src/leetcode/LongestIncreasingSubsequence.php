<?php

declare(strict_types=1);

namespace leetcode;

class LongestIncreasingSubsequence
{
    public static function lengthOfLIS(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        [$ans, $dp] = [1, array_fill(0, $n, 1)];
        for ($i = 1; $i < $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                    $ans = max($ans, $dp[$i]);
                }
            }
        }

        return $ans;
    }

    public static function lengthOfLIS2(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        $ans = [$nums[0]];
        foreach ($nums as $num) {
            if ($num < $ans[0]) {
                $ans[0] = $num;
            } elseif ($num > $ans[count($ans) - 1]) {
                $ans[] = $num;
            } else {
                [$left, $right] = [0, count($ans)];
                while ($left < $right) {
                    $middle = $left + (int)(($right - $left) / 2);
                    if ($ans[$middle] < $num) {
                        $left = $middle + 1;
                    } else {
                        $right = $middle;
                    }
                }
                $ans[$right] = $num;
            }
        }

        return count($ans);
    }

    public static function lengthOfLIS3(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        [$tails, $size] = [array_fill(0, $n, 0), 0];
        foreach ($nums as $x) {
            [$i, $j] = [0, $size];
            while ($i !== $j) {
                $m = (int)(($i + $j) / 2);
                if ($tails[$m] < $x) {
                    $i = $m + 1;
                } else {
                    $j = $m;
                }
            }
            $tails[$i] = $x;
            if ($i === $size) {
                ++$size;
            }
        }

        return $size;
    }
}

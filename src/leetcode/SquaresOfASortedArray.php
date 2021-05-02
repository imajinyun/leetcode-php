<?php

declare(strict_types=1);

namespace leetcode;

class SquaresOfASortedArray
{
    public static function sortedSquares(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$ans, $i, $j] = [[], 0, $n - 1];
        for ($k = $n - 1; $k >= 0; $k--) {
            if (abs($nums[$i]) > abs($nums[$j])) {
                $ans[$k] = $nums[$i] * $nums[$i];
                $i++;
            } else {
                $ans[$k] = $nums[$j] * $nums[$j];
                $j--;
            }
        }
        sort($ans);

        return $ans;
    }

    public static function sortedSquares2(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$ans, $l, $r] = [[], 0, $n - 1];
        while ($l <= $r) {
            [$left, $right] = [abs($nums[$l]), abs($nums[$r])];
            if ($left > $right) {
                $ans[] = pow($left, 2);
                $l++;
            } else {
                $ans[] = pow($right, 2);
                $r--;
            }
        }
        sort($ans);

        return $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class MissingNumber
{
    public static function missingNumber(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $ans = count($nums);
        foreach ($nums as $key => $num) {
            $ans ^= $key ^ $num;
        }

        return $ans;
    }

    public static function missingNumber2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $ans = 0;
        foreach ($nums as $key => $num) {
            $ans += $key;
            $ans -= $num;
        }

        return $ans + count($nums);
    }

    public static function missingNumber3(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        sort($nums);
        [$left, $right] = [0, count($nums) - 1];
        while ($left <= $right) {
            $mid = $left + ($right - $left) / 2;
            if ($nums[$mid] > $mid) {
                $right--;
            } else {
                $left++;
            }
        }

        return $left;
    }
}

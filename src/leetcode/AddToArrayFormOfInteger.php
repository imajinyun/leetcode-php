<?php

declare(strict_types=1);

namespace leetcode;

class AddToArrayFormOfInteger
{
    public static function addToArrayForm(array $nums, int $k): array
    {
        if (empty($nums) || $k < 0) {
            return [];
        }
        [$ans, $n] = [[], count($nums)];
        for ($i = $n - 1; $i >= 0; $i--) {
            $sum = $nums[$i] + $k % 10;
            $k = (int) ($k / 10);
            if ($sum >= 10) {
                $k++;
                $sum -= 10;
            }
            $ans[] = (int) $sum;
        }
        for (; $k > 0; $k = (int) ($k /= 10)) {
            $ans[] = $k % 10;
        }

        return array_reverse($ans);
    }

    public static function addToArrayForm2(array $nums, int $k): array
    {
        if (empty($nums) || $k < 0) {
            return [];
        }
        $n = count($nums);
        for ($i = $n - 1; $i >= 0; $i--) {
            $ans[] = ($nums[$i] + $k) % 10;
            $k = (int) (($nums[$i] + $k) / 10);
        }
        while ($k > 0) {
            $ans[] = $k % 10;
            $k = (int) ($k / 10);
        }

        return array_reverse($ans);
    }

    public static function addToArrayForm3(array $nums, int $k): array
    {
        if (empty($nums) || $k < 0) {
            return [];
        }
        $n = count($nums);
        for ($i = $n - 1; $i >= 0 || $k > 0; $i--) {
            $ans[] = ($i >= 0 ? $nums[$i] + $k : $k) % 10;
            $k = (int) (($i >= 0 ? $nums[$i] + $k : $k) / 10);
        }

        return array_reverse($ans);
    }
}

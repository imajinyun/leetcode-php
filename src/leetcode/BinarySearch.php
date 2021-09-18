<?php

declare(strict_types=1);

namespace leetcode;

class BinarySearch
{
    public static function search(array &$nums, int $target): int
    {
        if (empty($nums)) {
            return -1;
        }
        $n = count($nums);
        [$left, $right] = [0, $n - 1];
        while ($left <= $right) {
            $mid = $left + intdiv($right - $left, 2);
            if ($nums[$mid] > $target) {
                $right = $mid - 1;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }

        return -1;
    }

    public static function search2(array &$nums, int $target): int
    {
        if (empty($nums)) {
            return -1;
        }
        [$left, $right] = [0, count($nums)];
        while ($left < $right) {
            $mid = $left + (($right - $left) >> 1);
            if ($nums[$mid] > $target) {
                $right = $mid;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }

        return -1;
    }
}

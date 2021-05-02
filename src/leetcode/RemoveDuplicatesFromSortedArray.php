<?php

declare(strict_types=1);

namespace leetcode;

class RemoveDuplicatesFromSortedArray
{
    public static function removeDuplicates(array &$nums): int
    {
        if (($n = count($nums)) === 0) {
            return 0;
        }
        $k = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] === $nums[$i - 1]) {
                $k++;
            } else {
                $nums[$i - $k] = $nums[$i];
            }
        }

        return $n - $k;
    }

    public static function removeDuplicates2(array &$nums): int
    {
        if (($n = count($nums)) === 0) {
            return 0;
        }
        [$i, $j] = [1, 0];
        for (; $i < $n; $i++) {
            if ($nums[$i] !== $nums[$j]) {
                $nums[++$j] = $nums[$i];
            }
        }

        return $j + 1;
    }
}

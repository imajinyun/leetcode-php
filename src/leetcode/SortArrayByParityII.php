<?php

declare(strict_types=1);

namespace leetcode;

class SortArrayByParityII
{
    public static function sortArrayByParityII(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$i, $j] = [0, 1];
        while ($i < $n && $j < $n) {
            while ($i < $n && $nums[$i] % 2 === 0) {
                $i += 2;
            }
            while ($j < $n && $nums[$j] % 2 === 1) {
                $j += 2;
            }
            if ($i < $n && $j < $n) {
                $tmp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $tmp;
            }
        }

        return $nums;
    }

    public static function sortArrayByParityII2(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$i, $j] = [0, 1];
        while ($i < $n && $j < $n) {
            if ($nums[$i] % 2 === 0) {
                $i += 2;
            } elseif ($nums[$j] % 2 === 1) {
                $j += 2;
            } else {
                [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
                $i += 2;
                $j += 2;
            }
        }

        return $nums;
    }
}

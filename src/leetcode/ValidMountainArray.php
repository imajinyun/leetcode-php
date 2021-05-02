<?php

declare(strict_types=1);

namespace leetcode;

class ValidMountainArray
{
    public static function validMountainArray(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        $n = count($arr);
        [$i, $j] = [0, $n - 1];
        while ($i + 1 < $n && $arr[$i] < $arr[$i + 1]) {
            $i++;
        }
        while ($j > 0 && $arr[$j - 1] > $arr[$j]) {
            $j--;
        }

        return $i > 0 && $i === $j && $j < $n - 1;
    }

    public static function validMountainArray2(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        $n = count($arr);
        [$start, $end] = [0, $n - 1];
        while ($start < $end) {
            if ($arr[$start] < $arr[$start + 1]) {
                $start++;
            } elseif ($arr[$end] < $arr[$end - 1]) {
                $end--;
            } else {
                break;
            }
        }

        return $start > 0 && $start === $end && $end < $n - 1;
    }
}

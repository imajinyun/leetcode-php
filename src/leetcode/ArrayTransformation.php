<?php

declare(strict_types=1);

namespace leetcode;

class ArrayTransformation
{
    public static function transformArray(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        [$changed, $n] = [true, count($arr)];
        $tmp = $arr;
        while ($changed) {
            $changed = false;
            for ($i = 1; $i < $n - 1; $i++) {
                if ($arr[$i - 1] < $arr[$i] && $arr[$i] > $arr[$i + 1]) {
                    $tmp[$i] -= 1;
                    $changed = true;
                } elseif ($arr[$i - 1] > $arr[$i] && $arr[$i] < $arr[$i + 1]) {
                    $tmp[$i] += 1;
                    $changed = true;
                }
            }
            $arr = $tmp;
        }

        return $arr;
    }

    public static function transformArray2(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        [$changed, $n] = [true, count($arr)];
        while ($changed) {
            [$prev, $changed] = [$arr[0], false];
            for ($i = 1; $i < $n - 1; $i++) {
                $curr = $arr[$i];
                if ($prev < $curr && $curr > $arr[$i + 1]) {
                    [$changed, $arr[$i]] = [true, $curr - 1];
                } elseif ($prev > $curr && $curr < $arr[$i + 1]) {
                    [$changed, $arr[$i]] = [true, $curr + 1];
                }
                $prev = $curr;
            }
        }

        return $arr;
    }
}

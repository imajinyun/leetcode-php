<?php

declare(strict_types=1);

namespace leetcode;

class SortArrayByParity
{
    public static function sortArrayByParity(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        for ($i = 0, $j = 0, $n = count($arr); $j < $n; $j++) {
            if ($arr[$j] % 2 === 0) {
                $tmp = $arr[$i];
                $arr[$i++] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }

        return $arr;
    }

    public static function sortArrayByParity2(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        $n = count($arr);
        [$res, $start, $end] = [array_fill(0, $n, 0), 0, $n - 1];
        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] % 2 === 0) {
                $res[$start++] = $arr[$i];
            } else {
                $res[$end--] = $arr[$i];
            }
        }

        return $res;
    }
}

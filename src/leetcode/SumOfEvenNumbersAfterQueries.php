<?php

declare(strict_types=1);

namespace leetcode;

class SumOfEvenNumbersAfterQueries
{
    public static function sumEvenAfterQueries(array $arr, array $queries): array
    {
        if (empty($arr) || empty($queries)) {
            return [];
        }
        $sum = array_sum(array_filter($arr, function ($val) {
            return $val % 2 === 0;
        }));
        $ans = [];
        foreach ($queries as $key => $item) {
            [$k, $v] = [$item[1], $item[0]];
            if ($arr[$k] % 2 === 0) {
                $sum -= $arr[$k];
            }
            $arr[$k] += $v;
            if ($arr[$k] % 2 === 0) {
                $sum += $arr[$k];
            }
            $ans[$key] = $sum;
        }

        return $ans;
    }
}

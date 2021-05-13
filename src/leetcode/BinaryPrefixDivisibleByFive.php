<?php

declare(strict_types=1);

namespace leetcode;

class BinaryPrefixDivisibleByFive
{
    public static function prefixesDivByFive(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        [$ans, $num] = [[], 0];
        foreach ($arr as $val) {
            $num = $num * 2 + $val;
            array_push($ans, $num % 5 === 0);
        }

        return $ans;
    }

    public static function prefixesDivByFive2(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        $num = 0;
        foreach ($arr as $key => $val) {
            $num = $num * 2 % 5 + $val;
            $arr[$key] = $num % 5 === 0;
        }

        return $arr;
    }
}

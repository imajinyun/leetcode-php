<?php

declare(strict_types=1);

namespace leetcode;

class StringToInteger
{
    public static function myAtoi(string $s): int
    {
        $s = trim($s);
        $n = strlen($s);
        if ($n === 0) {
            return 0;
        }
        [$sign, $base, $i] = [1, 0, 0];
        while ($i < $n && $s[$i] === ' ') {
            $i++;
        }
        if ($i < $n && ($s[$i] === '+' || $s[$i] === '-')) {
            $sign = ($s[$i++] === '+') ? 1 : -1;
        }
        [$min, $max] = [-2 ** 31, 2 ** 31 - 1]; // -2147483648~2147483647
        while ($i < $n && is_numeric($s[$i])) {
            if ($base > $max || $base < $min) {
                return $sign === 1 ? $max : $min;
            }
            $base = 10 * $base + ($s[$i++] - '0');
        }

        return $base * $sign;
    }
}

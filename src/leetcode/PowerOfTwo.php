<?php

declare(strict_types=1);

namespace leetcode;

class PowerOfTwo
{
    public static function isPowerOfTwo(int $n): bool
    {
        return $n > 0 && (($n & ($n - 1)) === 0);
    }

    public static function isPowerOfTwo2(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }
        while ($n % 2 === 0) {
            $n /= 2;
        }

        return $n === 1;
    }

    public static function isPowerOfTwo3(int $n): bool
    {
        return $n > 0 && ($n === 1 || ($n % 2 === 0 && self::isPowerOfTwo3($n / 2)));
    }
}

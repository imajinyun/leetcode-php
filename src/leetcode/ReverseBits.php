<?php

declare(strict_types=1);

namespace leetcode;

class ReverseBits
{
    public static function reverseBits(int $n): int
    {
        if ($n === 0) {
            return 0;
        }
        $ans = 0;
        for ($i = 0; $i < 32; $i++) {
            $ans <<= 1;
            $ans += $n & 1;
            $n >>= 1;
        }

        return $ans;
    }

    public static function reverseBits2(int $n): int
    {
        if ($n === 0) {
            return 0;
        }
        $ans = 0;
        for ($i = 0; $i < 32; $i++) {
            $ans = ($ans << 1) ^ ($n & 1);
            $n >>= 1;
        }

        return $ans;
    }
}

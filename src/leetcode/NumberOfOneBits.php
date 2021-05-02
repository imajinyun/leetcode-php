<?php

declare(strict_types=1);

namespace leetcode;

class NumberOfOneBits
{
    public static function hammingWeight(int $n): int
    {
        $cnt = 0;
        while ($n !== 0) {
            $n &= ($n - 1);
            $cnt++;
        }

        return $cnt;
    }

    public static function hammingWeight2(int $n): int
    {
        $cnt = 0;
        while ($n !== 0) {
            $cnt += $n & 1;
            $n >>= 1;
        }

        return $cnt;
    }
}

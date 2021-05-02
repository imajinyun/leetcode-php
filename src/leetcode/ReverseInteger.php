<?php

declare(strict_types=1);

namespace leetcode;

class ReverseInteger
{
    public static function reverse(int $num): int
    {
        $ans = 0;
        [$min, $max] = [-pow(2, 31), pow(2, 31) - 1];

        while ($num !== 0) {
            $ans = $ans * 10 + $num % 10;
            $num = (int) ($num / 10);
            if ($ans < $min || $ans > $max) {
                return 0;
            }
        }

        return (int) $ans;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class PlusOne
{
    public static function plusOne(array $digits): array
    {
        $n = count($digits);
        if ($n === 1 && $digits[0] === 9) {
            return [1, 0];
        }

        if ($n === 0) {
            $digits = [1];
        } elseif ($digits[$n - 1] === 9) {
            $digits = self::plusOne(array_slice($digits, 0, count($digits) - 1));
            $digits[] = [0];
        } else {
            $digits[$n - 1] += 1;
        }

        return $digits;
    }

    public static function plusOne2(array $digits): array
    {
        [$n, $carry] = [count($digits), 1];
        for ($i = $n - 1; $i >= 0; $i--) {
            $digits[$i] += $carry;
            if ($digits[$i] <= 9) {
                return $digits;
            }
            $digits[$i] = 0;
        }
        $ans = array_fill(0, $n + 1, 0);
        $ans[0] = 1;

        return $ans;
    }
}

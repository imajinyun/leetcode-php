<?php

declare(strict_types=1);

namespace leetcode;

class CountingBits
{
    public static function countBits(int $num): array
    {
        if ($num <= 0) {
            return [];
        }
        $bits = array_fill(0, $num + 1, 0);
        for ($i = 1; $i <= $num; $i++) {
            $bits[$i] = $bits[$i & ($i - 1)] + 1;
        }

        return $bits;
    }

    public static function countBits2(int $num): array
    {
        if ($num <= 0) {
            return [];
        }
        $bits = array_fill(0, $num + 1, 0);
        $bits[0] = 0;
        for ($i = 1; $i <= $num; $i++) {
            $bits[$i] = ($i & 1) === 0 ? $bits[$i >> 1] : $bits[$i - 1] + 1;
        }

        return $bits;
    }

    public static function countBits3(int $num): array
    {
        if ($num <= 0) {
            return [];
        }
        $bits = array_fill(0, $num + 1, 0);
        $bits[0] = 0;
        $pow = 1;
        for ($i = 1, $t = 0; $i <= $num; $i++, $t++) {
            if ($i === $pow) {
                $pow *= 2;
                $t = 0;
            }
            $bits[$i] = $bits[$t] + 1;
        }

        return $bits;
    }

    public static function countBits4(int $num): array
    {
        if ($num <= 0) {
            return [];
        }
        $bits = array_fill(0, $num + 1, 0);
        for ($i = 1; $i <= $num; $i++) {
            $bits[$i] = $bits[$i / 2] + $i % 2;
        }

        return $bits;
    }
}

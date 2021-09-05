<?php

declare(strict_types=1);

namespace leetcode;

class HammingDistance
{
    public static function hammingDistance(int $x, int $y): int
    {
        if ($x === $y) {
            return 0;
        }

        $z = (string)(decbin($x ^ $y));

        return (int)(substr_count($z, '1'));
    }

    public static function hammingDistance2(int $x, int $y): int
    {
        if ($x === $y) {
            return 0;
        }
        [$n, $z] = [0, $x ^ $y];
        while ($z) {
            $z &= $z - 1;
            $n++;
        }

        return $n;
    }
}

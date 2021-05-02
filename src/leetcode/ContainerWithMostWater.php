<?php

declare(strict_types=1);

namespace leetcode;

class ContainerWithMostWater
{
    public static function maxArea(array $height): int
    {
        $n = count($height);
        if ($n <= 0) {
            return 0;
        }
        [$x, $y, $ans] = [0, $n - 1, 0];
        while ($x !== $y) {
            if ($height[$x] < $height[$y]) {
                $area = $height[$x] * ($y - $x);
                $x++;
            } else {
                $area = $height[$y] * ($y - $x);
                $y--;
            }
            $ans = max($ans, $area);
        }

        return $ans;
    }

    public static function maxArea2(array $height): int
    {
        $n = count($height);
        if ($n <= 0) {
            return 0;
        }
        [$x, $y, $ans] = [0, $n - 1, 0];
        while ($x < $y) {
            $area = min($height[$x], $height[$y]) * ($y - $x);
            $ans = max($ans, $area);
            $height[$x] < $height[$y] ? $x++ : $y--;
        }

        return $ans;
    }
}

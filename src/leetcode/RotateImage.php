<?php

declare(strict_types=1);

namespace leetcode;

class RotateImage
{
    public static function rotate(array &$matrix): void
    {
        $n = count($matrix);
        if ($n <= 1) {
            return;
        }
        for ($i = 0; $i < intdiv($n, 2); $i++) { // col
            for ($j = $n - $i - 1; $j > $i; $j--) { // row
                $t = $matrix[$j][$i];
                $matrix[$j][$i] = $matrix[$n - $i - 1][$j];
                $matrix[$n - $i - 1][$j] = $matrix[$n - $j - 1][$n - $i - 1];
                $matrix[$n - $j - 1][$n - $i - 1] = $matrix[$i][$n - $j - 1];
                $matrix[$i][$n - $j - 1] = $t;
            }
        }
    }
}

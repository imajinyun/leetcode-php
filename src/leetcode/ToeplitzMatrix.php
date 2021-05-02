<?php

declare(strict_types=1);

namespace leetcode;

class ToeplitzMatrix
{
    public static function isToeplitzMatrix(array $matrix): bool
    {
        [$m, $n] = [count($matrix), empty($matrix[0]) ? 0 : count($matrix[0])];
        if ($m <= 0 || $n <= 0) {
            return false;
        }
        for ($i = 0; $i < $m - 1; $i++) {
            for ($j = 0; $j < $n - 1; $j++) {
                if ($matrix[$i][$j] !== $matrix[$i + 1][$j + 1]) {
                    return false;
                }
            }
        }

        return true;
    }
}

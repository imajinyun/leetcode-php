<?php

declare(strict_types=1);

namespace leetcode;

class PascalsTriangleII
{
    public static function getRow(int $n): array
    {
        $ans = array_fill(0, $n + 1, 0);
        $ans[0] = 1;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $i; $j > 0; $j--) {
                $ans[$j] += $ans[$j - 1];
            }
        }

        return $ans;
    }
}

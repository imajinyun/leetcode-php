<?php

declare(strict_types=1);

namespace leetcode;

class PascalsTriangle
{
    public static function generate(int $n): array
    {
        $ans = [];
        for ($i = 0; $i < $n; $i++) {
            $row = [];
            for ($j = 0; $j < $i + 1; $j++) {
                if ($j === 0 || $j === $i) {
                    $row[] = 1;
                } else {
                    $a = $ans[$i - 1][$j - 1] ?? 0;
                    $b = $ans[$i - 1][$j] ?? 0;
                    $row[] = $a + $b;
                }
            }
            $ans[] = $row;
        }

        return $ans;
    }
}

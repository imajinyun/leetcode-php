<?php

declare(strict_types=1);

namespace leetcode;

class CountNumbersWithUniqueDigits
{
    public static function countNumbersWithUniqueDigits(int $n): int
    {
        if ($n < 0 || $n > 8) {
            return 0;
        }
        if ($n === 0) {
            return 1;
        }
        [$ans, $base] = [10, 9];
        for ($i = 2; $i <= $n && $i <= 10; $i++) {
            $base *= 9 - $i + 2;
            $ans += $base;
        }

        return $ans;
    }

    public static function countNumbersWithUniqueDigits2(int $n): int
    {
        if ($n < 0 || $n > 8) {
            return 0;
        }
        if ($n === 0) {
            return 1;
        }
        $visited = array_fill(0, 10, false);
        $count = 0;
        for ($i = 0; $i <= min(10, $n); $i++) {
            $count += self::dfs($i, 0, $visited);
        }

        return $count;
    }

    private static function dfs(int $target, int $index, array &$visited): int
    {
        if ($target === $index) {
            return 1;
        }
        $count = 0;
        for ($i = $index ? 0 : 1; $i < 10; $i++) {
            if (! $visited[$i]) {
                $visited[$i] = true;
                $count += self::dfs($target, $index + 1, $visited);
                $visited[$i] = false;
            }
        }

        return $count;

    }
}

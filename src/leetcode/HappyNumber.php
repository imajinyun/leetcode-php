<?php

declare(strict_types=1);

namespace leetcode;

class HappyNumber
{
    public static function isHappy(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }
        $helper = static function (int $num) {
            [$sum, $tmp] = [0, null];
            while ($num) {
                $tmp = $num % 10;
                $sum += $tmp * $tmp;
                $num /= 10;
            }
            return $sum;
        };

        $slow = $fast = $n;
        do {
            $slow = $helper($slow);
            $fast = $helper($fast);
            $fast = $helper($fast);
        } while ($slow !== $fast);

        return $slow === 1;
    }

    public static function isHappy2(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }
        $visited = [];
        while ($n !== 1 && ! in_array($n, $visited, true)) {
            array_push($visited, $n);
            $n = array_sum(array_map(fn ($x) => $x ** 2, str_split((string) $n)));
        }

        return !in_array($n, $visited, true);
    }
}

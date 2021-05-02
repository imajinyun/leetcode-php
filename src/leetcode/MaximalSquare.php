<?php

declare(strict_types=1);

namespace leetcode;

class MaximalSquare
{
    public static function maximalSquare(array $matrix): int
    {
        [$m, $n, $ans] = [count($matrix), count($matrix[0]), 0];
        if ($m <= 0 || $n <= 0) {
            return $ans;
        }
        $helper = static function (array $array, int $k) {
            $n = count($array);
            if ($n < $k) {
                return 0;
            }
            $counter = 0;
            for ($i = 0; $i < $n; $i++) {
                $counter = $array[$i] !== $k ? 0 : ($counter + 1);
                if ($counter === $k) {
                    return $k * $k;
                }
            }

            return 0;
        };

        for ($i = 0; $i < $m; $i++) {
            $tmp = array_fill(0, $n, 0);
            for ($j = $i; $j < $n; $j++) {
                for ($k = 0; $k < $n; $k++) {
                    if (isset($matrix[$j][$k]) && $matrix[$j][$k] === 1) {
                        $tmp[$k]++;
                    }
                }
                $ans = max($ans, $helper($tmp, $j - $i + 1));
            }
        }

        return $ans;
    }

    public static function maximalSquare2(array $matrix): int
    {
        [$m, $n, $ans] = [count($matrix), count($matrix[0]), 0];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));
        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($matrix[$i - 1][$j - 1] === 1) {
                    $dp[$i][$j] = min($dp[$i - 1][$j - 1], min($dp[$i - 1][$j], $dp[$i][$j - 1])) + 1;
                    $ans = max($ans, $dp[$i][$j]);
                }
            }
        }

        return $ans * $ans;
    }

    public static function maximalSquare3(array $matrix): int
    {
        [$m, $n, $ans, $prev] = [count($matrix), count($matrix[0]), 0, 0];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $m + 1, 0);
        for ($j = 0; $j < $n; $j++) {
            for ($i = 1; $i <= $m; $i++) {
                $temp = $dp[$i];
                if ($matrix[$i - 1][$j] === 1) {
                    $dp[$i] = min($dp[$i], min($dp[$i - 1], $prev)) + 1;
                    $ans = max($ans, $dp[$i]);
                } else {
                    $dp[$i] = 0;
                }
                $prev = $temp;
            }
        }

        return $ans * $ans;
    }
}

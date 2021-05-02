<?php

declare(strict_types=1);

namespace leetcode;

class MergeSortedArray
{
    public static function merge(array &$num1, int $m, array &$num2, int $n): void
    {
        [$i, $j, $k] = [$m - 1, $n - 1, $m + $n - 1];
        while ($i >= 0 && $j >= 0) {
            if ($num1[$i] > $num2[$j]) {
                $num1[$k] = $num1[$i];
                $i--;
                $k--;
            } else {
                $num1[$k] = $num2[$j];
                $j--;
                $k--;
            }
        }
        while ($i >= 0) {
            $num1[$k] = $num1[$i];
            $i--;
            $k--;
        }
        while ($j >= 0) {
            $num1[$k] = $num2[$j];
            $j--;
            $k--;
        }
    }

    public static function merge2(array &$num1, int $m, array &$num2, int $n): void
    {
        [$i, $j, $k] = [$m - 1, $n - 1, $m + $n - 1];
        while ($i >= 0 && $j >= 0) {
            $num1[$k--] = $num1[$i] > $num2[$j] ? $num1[$i--] : $num2[$j--];
        }
        while ($j >= 0) {
            $num1[$k--] = $num2[$j--];
        }
    }
}

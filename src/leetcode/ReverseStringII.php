<?php

declare(strict_types=1);

namespace leetcode;

class ReverseStringII
{
    public static function reverseStr(string $s, int $k): string
    {
        if (empty($s) || $k <= 0) {
            return '';
        }
        $n = strlen($s);
        for ($m = 0; $m < $n; $m += 2 * $k) {
            for ($i = $m, $j = min($m + $k - 1, $n - 1); $i < $j; $i++, $j--) {
                $t = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $t;
            }
        }

        return $s;
    }

    public static function reverseStr2(string $s, int $k): string
    {
        if (empty($s) || $k <= 0) {
            return '';
        }
        [$i, $n] = [0, strlen($s)];
        while ($i < $n) {
            $j = min($i + $k - 1, $n - 1);
            $m = $j + $k + 1;
            while ($i < $j) {
                $t = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $t;
                $i++;
                $j--;
            }
            $i = $m;
        }

        return $s;
    }
}

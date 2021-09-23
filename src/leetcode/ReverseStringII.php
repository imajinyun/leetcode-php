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
        [$m, $n] = [0, strlen($s)];
        for (; $m < $n; $m += 2 * $k) {
            for ($i = $m, $j = min($m + $k - 1, $n - 1); $i < $j; $i++, $j--) {
                $t = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $t;
            }
        }

        return $s;
    }
}

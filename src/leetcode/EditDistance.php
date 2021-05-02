<?php

declare(strict_types=1);

namespace leetcode;

class EditDistance
{
    public static function minDistance(string $s, string $t): int
    {
        [$m, $n] = [strlen($s), strlen($t)];
        if ($m === 0 || $n === 0) {
            return 0;
        }
        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, null));
        for ($i = 1; $i <= $m; $i++) {
            $dp[$i][0] = $i;
        }
        for ($j = 1; $j <= $n; $j++) {
            $dp[0][$j] = $j;
        }
        for ($i = 1; $i <= $m; $i++) {
            $ci = $s[$i - 1];
            for ($j = 1; $j <= $n; $j++) {
                $cj = $t[$j - 1];
                if ($ci === $cj) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } else {
                    $insert = $dp[$i - 1][$j] + 1;
                    $delete = $dp[$i][$j - 1] + 1;
                    $replace = $dp[$i - 1][$j - 1] + 1;
                    $dp[$i][$j] = min($insert, $delete, $replace);
                }
            }
        }

        return $dp[$m][$n];
    }
}

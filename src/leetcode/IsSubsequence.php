<?php

declare(strict_types=1);

namespace leetcode;

class IsSubsequence
{
    public static function isSubsequence(string $s, string $t): bool
    {
        [$m, $n, $i, $j] = [strlen($s), strlen($t), 0, 0];
        if ($m < 0 || $n < 0) {
            return false;
        }
        while ($i < $m && $j < $n) {
            if ($s[$i] === $t[$j]) {
                $i++;
            }
            $j++;
        }

        return $i === $m;
    }

    public static function isSubsequence2(string $s, string $t): bool
    {
        [$m, $n] = [strlen($s), strlen($t)];
        if ($m < 0 || $n < 0) {
            return false;
        }

        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, false));
        $dp[0][0] = true;
        for ($i = 1; $i <= $m; $i++) {
            $dp[$i][0] = false;
        }
        for ($j = 1; $j <= $n; $j++) {
            $dp[0][$j] = true;
        }

        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($s[$i - 1] === $t[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } else {
                    $dp[$i][$j] = $dp[$i][$j - 1];
                }
            }
        }

        return $dp[$m][$n];
    }
}

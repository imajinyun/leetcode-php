<?php

declare(strict_types=1);

namespace leetcode;

class RegularExpressionMatching
{
    public static function isMatch(string $s, string $p): bool
    {
        if (empty($s) && empty($p)) {
            return true;
        }
        [$m, $n] = [strlen($s) + 1, strlen($p) + 1];
        $dp = array_fill(0, $m, array_fill(0, $n, false));
        $dp[0][0] = true;

        for ($j = 1; $j < $n; $j++) {
            if ($p[$j - 1] === '*') {
                $dp[0][$j] = $dp[0][$j - 2];
            }
        }

        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($p[$j - 1] === '.' || $p[$j - 1] === $s[$i - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } elseif ($p[$j - 1] === '*') {
                    $dp[$i][$j] = $dp[$i][$j - 2];

                    if ($p[$j - 2] === '.' || $p[$j - 2] === $s[$i - 1]) {
                        $dp[$i][$j] |= $dp[$i - 1][$j];
                    }
                } else {
                    $dp[$i][$j] = false;
                }
            }
        }

        return (bool)$dp[$m - 1][$n - 1];
    }

    public static function isMatch2(string $s, string $p): bool
    {
        if (empty($s) && empty($p)) {
            return true;
        }
        [$m, $n] = [strlen($s) + 1, strlen($p) + 1];
        $dp = array_fill(0, $m, array_fill(0, $n, false));
        $dp[0][0] = true; // since empty string matches empty pattern
        for ($j = 2; $j < $n; $j += 2) {
            if ($p[$j - 1] === '*' && $dp[0][$j - 2]) {
               $dp[0][$j] = true;
            }
        }
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($s[$i - 1] === $p[$j - 1] || $p[$j - 1] === '.') {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                }
                if ($p[$j - 1] === '*') {
                    if ($p[$j - 2] !== '.' && $p[$j - 2] !== $s[$i - 1]) {
                        $dp[$i][$j] = $dp[$i][$j - 2];
                    } else {
                        $dp[$i][$j] = ($dp[$i][$j - 2] || $dp[$i - 1][$j - 2] || $dp[$i - 1][$j]);
                    }
                }
            }
        }

        return (bool)$dp[$m - 1][$n - 1];
    }
}

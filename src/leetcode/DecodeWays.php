<?php

declare(strict_types=1);

namespace leetcode;

class DecodeWays
{
    public static function numDecodings(string $s): int
    {
        $n = strlen($s);
        if ($n <= 0 || (isset($s[0]) && $s[0] === '0')) {
            return 0;
        }

        $dp = array_fill(0, $n + 1, 0);
        [$dp[0], $dp[1]] = [1, 1];
        for ($i = 2; $i <= $n; $i++) {
            [$p, $q] = [(int) $s[$i - 1], (int) $s[$i - 2]];
            $dp[$i] = $p === 0 ? 0 : $dp[$i - 1];
            if ($q === 1 || ($q === 2 && $p <= 6)) {
                $dp[$i] += $dp[$i - 2];
            }
        }

        return $dp[$n];
    }

    public static function numDecodings2(string $s): int
    {
        $n = strlen($s);
        if ($n <= 0 || (isset($s[0]) && $s[0] === '0')) {
            return 0;
        }
        $helper = static function ($s, $start, $length) {
            $len = $start > $length ? $start : $length;
            $pos = $start > $length ? 1 : $start;
            $tmp = substr($s, 0, $len);

            return substr($tmp, $pos, $len);
        };

        $dp = array_fill(0, $n + 1, 0);
        [$dp[0], $dp[1]] = [1, 1];
        for ($i = 2; $i <= $n; $i++) {
            $p = $helper($s, $i - 1, $i);
            $q = $helper($s, $i - 2, $i);
            if ($p >= 1 && $p <= 9) {
                $dp[$i] += $dp[$i - 1];
            }
            if ($q >= 10 && $q <= 26) {
                $dp[$i] += $dp[$i - 2];
            }
        }

        return $dp[$n];
    }
}

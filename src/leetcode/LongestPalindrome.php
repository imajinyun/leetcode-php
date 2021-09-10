<?php

declare(strict_types=1);

namespace leetcode;

class LongestPalindrome
{
    public static function longestPalindrome(string $s): int
    {
        if (empty($s)) {
            return 0;
        }
        [$ans, $map] = [0, []];
        for ($i = 0, $n = strlen($s); $i < $n; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
            if ($map[$s[$i]] === 2) {
                $ans += 2;
                unset($map[$s[$i]]);
            }
        }

        return $map ? $ans + 1 : $ans;
    }

    public static function longestPalindrome2(string $s): int
    {
        if (empty($s)) {
            return 0;
        }
        [$ans, $n] = [0, strlen($s)];
        for ($i = 0; $i < $n; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
        }
        foreach ($map as $val) {
            $ans += (int)($val / 2) * 2;
            if ($ans % 2 === 0 && $val % 2 === 1) {
                $ans++;
            }
        }

        return $ans;
    }
}

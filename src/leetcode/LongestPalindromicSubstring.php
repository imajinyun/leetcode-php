<?php

declare(strict_types=1);

namespace leetcode;

class LongestPalindromicSubstring
{
    public static function longestPalindrome(string $s): string
    {
        $n = strlen($s);
        if ($n < 2) {
            return $s;
        }
        $helper = static function (string $s) {
            $n = strlen($s);
            for ($i = 0; $i < $n / 2; $i++) {
                if ($s[$i] !== $s[$n - $i - 1]) {
                    return false;
                }
            }

            return true;
        };
        [$ans, $max] = ['', 0];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                $tmp = substr($s, $i, $j);
                if ($helper($tmp) && strlen($tmp) > $max) {
                    $ans = substr($s, $i, $j);
                    $max = max($max, strlen($ans));
                }
            }
        }

        return $ans;
    }

    public static function longestPalindrome2(string $s): string
    {
        $n = strlen($s);
        if ($n < 2) {
            return $s;
        }

        $start = $length = 0;
        $helper = static function (string $s, int $l, int $r, int &$start, int &$length) {
            while ($l >= 0 && $r < strlen($s) && $s[$l ] === $s[$r]) {
                $l--;
                $r++;
            }

            if ($length < $r - $l - 1) {
                $start = $l + 1;
                $length = $r - $l - 1;
            }
        };
        for ($i = 0; $i < $n; $i++) {
            $helper($s, $i, $i, $start, $length);
            $helper($s, $i, $i + 1, $start, $length);
        }

        return substr($s, $start, $length);
    }

    public static function longestPalindrome3(string $s): string
    {
        $n = strlen($s);
        if ($n < 2) {
            return $s;
        }
        [$origin, $reverse, $max, $len] = [$s, strrev($s), 0, 0];
        $dp = array_fill(0, $n, array_fill(0, $n, 0));
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($origin[$i] === $reverse[$j]) {
                    if ($i === 0 || $j === 0) {
                        $dp[$i][$j] = 1;
                    } else {
                        $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
                    }
                }

                if ($dp[$i][$j] > $max) {
                    $prev = $n - 1 - $j;
                    if ($prev + $dp[$i][$j] - 1 === $i) {
                        $max = $dp[$i][$j];
                        $len= $i;
                    }
                }
            }
        }

        return substr($s, $len - $max + 1, $max);
    }
}

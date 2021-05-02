<?php

declare(strict_types=1);

namespace leetcode;

class LongestPalindromicSubstring
{
    public static function longestPalindrome(string $str): string
    {
        $len = strlen($str);
        if ($len < 2) {
            return $str;
        }
        $helper = static function (string $str) {
            $len = strlen($str);
            for ($i = 0; $i < $len / 2; ++$i) {
                if ($str[$i] !== $str[$len - $i - 1]) {
                    return false;
                }
            }

            return true;
        };
        [$ans, $max] = ['', 0];
        for ($i = 0; $i < $len; ++$i) {
            for ($j = 1; $j <= $len; ++$j) {
                $tmp = substr($str, $i, $j);
                if ($helper($tmp) && strlen($tmp) > $max) {
                    $ans = substr($str, $i, $j);
                    $max = max($max, strlen($ans));
                }
            }
        }

        return $ans;
    }

    public static function longestPalindrome2(string $str): string
    {
        $len = strlen($str);
        if ($len < 2) {
            return $str;
        }

        $start = $length = 0;
        $helper = static function (string $str, int $left, int $right, int &$start, int &$length) {
            while ($left >= 0 && $right < strlen($str) && $str[$left] === $str[$right]) {
                --$left;
                ++$right;
            }

            if ($length < $right - $left - 1) {
                $start = $left + 1;
                $length = $right - $left - 1;
            }
        };
        for ($i = 0; $i < $len; ++$i) {
            $helper($str, $i, $i, $start, $length);
            $helper($str, $i, $i + 1, $start, $length);
        }

        return substr($str, $start, $length);
    }

    public static function longestPalindrome3(string $str): string
    {
        $len = strlen($str);
        if ($len < 2) {
            return $str;
        }
        [$origin, $reverse, $maxLen, $maxEnd] = [$str, strrev($str), 0, 0];
        $dp = array_fill(0, $len, array_fill(0, $len, 0));
        for ($i = 0; $i < $len; ++$i) {
            for ($j = 0; $j < $len; ++$j) {
                if ($origin[$i] === $reverse[$j]) {
                    if ($i === 0 || $j === 0) {
                        $dp[$i][$j] = 1;
                    } else {
                        $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
                    }
                }

                if ($dp[$i][$j] > $maxLen) {
                    $prev = $len - 1 - $j;
                    if ($prev + $dp[$i][$j] - 1 === $i) {
                        $maxLen = $dp[$i][$j];
                        $maxEnd = $i;
                    }
                }
            }
        }

        return substr($str, $maxEnd - $maxLen + 1, $maxLen);
    }
}

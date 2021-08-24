<?php

declare(strict_types=1);

namespace leetcode;

class ValidPalindrome
{
    public static function isPalindrome(string $s): bool
    {
        if (0 === ($n = strlen($s))) {
            return true;
        }
        $ans = [];
        for ($i = 0; $i < $n; $i++) {
            // Can also use ctype_alnum instead.
            if (preg_match('/^[a-zA-Z0-9]$/', $s[$i])) {
                array_push($ans, strtolower($s[$i]));
            }
        }

        return $ans === array_reverse($ans);
    }

    public static function isPalindrome2(string $s): bool
    {
        if (empty($s)) {
            return true;
        }
        [$i, $j] = [0, strlen($s) - 1];
        while ($i < $j) {
            if (!ctype_alnum($s[$i])) {
                $i++;
            } elseif (!ctype_alnum($s[$j])) {
                $j--;
            } elseif (strtolower($s[$i]) !== strtolower($s[$j])) {
                return false;
            } else {
                $i++;
                $j--;
            }
        }

        return true;
    }

    public static function isPalindrome3(string $s): bool
    {
        if (empty($s)) {
            return true;
        }
        $s = strtolower($s);
        [$i, $j] = [0, strlen($s) - 1];
        while ($i < $j) {
            if (!ctype_alnum($s[$i])) {
                $i++;
            }
            if (!ctype_alnum($s[$j])) {
                $j--;
            }
            if (ctype_alnum($s[$i]) && ctype_alnum($s[$j])) {
                if ($s[$i] !== $s[$j]) {
                    return false;
                }
                $i++;
                $j--;
            }
        }

        return true;
    }
}

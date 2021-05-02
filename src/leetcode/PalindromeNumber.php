<?php

declare(strict_types=1);

namespace leetcode;

class PalindromeNumber
{
    public static function isPalindrome(int $num): bool
    {
        if ($num < 0) {
            return false;
        }
        if ($num === 0) {
            return true;
        }
        $res = (int)strrev((string)$num);

        return $num === $res;
    }

    public static function isPalindrome2(int $num): bool
    {
        if ($num < 0) {
            return false;
        }
        if ($num === 0) {
            return true;
        }
        [$ans, $res] = [$num, 0];
        while ($num !== 0) {
            $res = $res * 10 + $num % 10;
            $num = (int)($num / 10);
        }

        return $ans === $res;
    }
}

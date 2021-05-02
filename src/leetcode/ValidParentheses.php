<?php

declare(strict_types=1);

namespace leetcode;

class ValidParentheses
{
    public static function isValid(string $s): bool
    {
        [$ans, $n] = [false, strlen($s)];
        if ($n === 0) {
            return $ans;
        }
        $stack = [];
        for ($i = 0; $i < $n; $i++) {
            if ($s[$i] === '(') {
                $stack[] = ')';
            } elseif ($s[$i] === '[') {
                $stack[] = ']';
            } elseif ($s[$i] === '{') {
                $stack[] = '}';
            } elseif (empty($stack) || $s[$i] !== array_pop($stack)) {
                return false;
            }
        }

        return true;
    }
}

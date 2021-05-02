<?php

declare(strict_types=1);

namespace leetcode;

class GenerateParentheses
{
    public static function generateParenthesis(int $n): array
    {
        $ans = [];
        self::addParenthesis($ans, $n, $n);

        return $ans;
    }

    private static function addParenthesis(array &$ans, int $left, int $right, string $s = ''): void
    {
        if ($left === 0 && $right === 0) {
            $ans[] = $s;

            return;
        }

        if ($left > 0) {
            self::addParenthesis($ans, $left - 1, $right, $s.'(');
        }
        if ($right > $left) {
            self::addParenthesis($ans, $left, $right - 1, $s.')');
        }
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class MissingRanges
{
    public static function findMissingRanges(array &$nums, int $lower, int $upper): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        foreach ($nums as $num) {
            if ($num > $lower) {
                $ans[] = $lower . ($num - 1 > $lower ? ('->' . ($num - 1)) : '');
            }
            if ($num === $upper) {
                return $ans;
            }
            $lower = $num + 1;
        }
        if ($lower <= $upper) {
            $ans[] = $lower . ($upper > $lower ? ('->' . $upper) : '');
        }

        return $ans;
    }

    public static function findMissingRanges2(array &$nums, int $lower, int $upper): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        $next = $lower;
        foreach ($nums as $num) {
            if ($lower === PHP_INT_MAX) {
                return $ans;
            }
            if ($num < $next) {
                continue;
            }
            if ($num === $next) {
                $next++;
                continue;
            }
            $ans[] = self::getRange($next, $num - 1);
            if ($num === PHP_INT_MAX) {
                return $ans;
            }
            $next = $num + 1;
        }
        if ($next <= $upper) {
            $ans[] = self::getRange($next, $upper);
        }

        return $ans;
    }

    private static function getRange(int $a, int $b): string
    {
        return $a === $b ? (string) $a : sprintf('%d->%d', $a, $b);
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class ShortestWordDistance
{
    public static function shortestDistance(array &$words, string $s1, string $s2): int
    {
        $ans = PHP_INT_MAX;
        if (empty($words)) {
            return $ans;
        }
        [$n, $s, $t] = [count($words), -1, -1];
        for ($i = 0; $i < $n; $i++) {
            if ($words[$i] === $s1) {
                $s = $i;
            }
            if ($words[$i] === $s2) {
                $t = $i;
            }
            if ($s !== -1 && $t !== -1) {
                $ans = min($ans, abs($s - $t));
            }
        }

        return $ans;
    }
}

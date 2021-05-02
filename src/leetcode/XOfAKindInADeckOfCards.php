<?php

declare(strict_types=1);

namespace leetcode;

class XOfAKindInADeckOfCards
{
    public static function hasGroupsSizeX(array $deck): bool
    {
        if (empty($deck)) {
            return false;
        }
        [$ans, $map] = [0, []];
        foreach ($deck as $val) {
            $map[$val] = isset($map[$val]) ? $map[$val] + 1 : 1;
        }
        foreach ($map as $val) {
            $ans = self::helper($ans, $val);
        }

        return $ans > 1;
    }

    public static function hasGroupsSizeX2(array $deck): bool
    {
        if (empty($deck)) {
            return false;
        }
        $map = [];
        foreach ($deck as $val) {
            $map[$val] = isset($map[$val]) ? $map[$val] + 1 : 1;
        }

        $lowest = PHP_INT_MAX;
        foreach ($map as $val) {
            $lowest = min($lowest, $val);
        }

        for ($i = $lowest; $i >= 2; $i--) {
            $flag = true;
            foreach ($map as $val) {
                if ($val % $i !== 0) {
                    $flag = false;
                }
            }
            if ($flag) {
                return true;
            }
        }

        return false;
    }

    private static function helper(int $a, int $b): int
    {
        return $b > 0 ? self::helper($b, $a % $b) : $a;
    }
}

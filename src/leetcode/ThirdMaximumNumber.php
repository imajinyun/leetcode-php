<?php

declare(strict_types=1);

namespace leetcode;

class ThirdMaximumNumber
{
    public static function thirdMax(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $a = $b = $c = null;
        foreach ($nums as $num) {
            if ($num === $a || $num === $b || $num === $c) {
                continue;
            }
            if ($a === null || $num > $a) {
                $c = $b;
                $b = $a;
                $a = $num;
            } elseif ($b === null || $num > $b) {
                $c = $b;
                $b = $num;
            } elseif ($c === null || $num > $c) {
                $c = $num;
            }
        }

        return $c === null ? $a : $c;
    }
}

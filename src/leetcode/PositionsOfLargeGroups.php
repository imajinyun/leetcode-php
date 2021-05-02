<?php

declare(strict_types=1);

namespace leetcode;

class PositionsOfLargeGroups
{
    public static function largeGroupPositions(string $s): array
    {
        [$ans, $n] = [[], strlen($s)];
        if ($n === 0) {
            return $ans;
        }
        for ($i = 0, $j = 0; $i < $n; $i = $j) {
            for (; $j < $n && $s[$i] === $s[$j]; $j++);
            if ($j - $i >= 3) {
                $ans[] = [$i, $j - 1];
            }
        }

        return $ans;
    }
}

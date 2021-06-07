<?php

declare(strict_types=1);

namespace leetcode;

class MinimumCostToMoveChipsToTheSamePosition
{
    public static function minCostToMoveChips(array $position): int
    {
        if (empty($position)) {
            return 0;
        }
        $odd = $even = 0;
        foreach ($position as $value) {
            $value % 2 === 0 ? $even++ : $odd++;
        }

        return min($odd, $even);
    }
}

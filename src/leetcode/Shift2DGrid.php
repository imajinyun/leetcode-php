<?php

declare(strict_types=1);

namespace leetcode;

class Shift2DGrid
{
    public static function shiftGrid(array $grid, int $k): array
    {
        if (empty($grid)) {
            return [];
        }
        [$ans, $n] = [[], count($grid[0])];
        $arr = array_merge(...array_values($grid));

        while ($k--) {
            array_unshift($arr, array_pop($arr));
        }
        for ($i = 0, $m = count($arr); $i < $m; $i += $n) {
            array_push($ans, array_slice($arr, $i, $n));
        }

        return $ans;
    }
}

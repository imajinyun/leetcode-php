<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\UnionFind;

class NumberOfIslands
{
    private static $distance = [[-1, 0], [0, 1]];

    public static function numIslands(array $grid): int
    {
        [$rows, $cols] = [count($grid), count($grid[0])];
        if ($rows === 0) {
            return 0;
        }

        $uf = new UnionFind($grid);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($grid[$i][$j] === 1) {
                    foreach (self::$distance as $item) {
                        [$x, $y] = [$i + $item[0], $j + $item[1]];

                        if ($x >= 0 && $x < $rows && $y >= 0 && $y < $cols && $grid[$x][$y] === 1) {
                            $uf->union($i * $cols + $j, $x * $cols + $y);
                        }
                    }
                }
            }
        }

        return $uf->count;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class FriendCircles
{
    public static function findCircleNum(array $grid): int
    {
        $n = count($grid);
        if ($n === 0) {
            return 0;
        }
        $root = array_fill(0, $n, 0);
        for ($i = 0; $i < $n; $i++) {
            $root[$i] = $i;
        }
        $cnt = $n;
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($grid[$i][$j] === 1) {
                    [$x, $y] = [self::findRoot($root, $i), self::findRoot($root, $j)];
                    if ($x !== $y) {
                        $root[$x] = $y;
                        $cnt--;
                    }
                }
            }
        }

        return $cnt;
    }

    private static function findRoot(array $root, int $id): int
    {
        return $root[$id] !== $id ? self::findRoot($root, $root[$id]) : $id;
    }
}

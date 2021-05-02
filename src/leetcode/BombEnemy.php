<?php

declare(strict_types=1);

namespace leetcode;

class BombEnemy
{
    public static function maxKilledEnemies(array $grids): int
    {
        [$res, $m, $n] = [0, count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return $res;
        }
        $v1 = $v2 = $v3 = $v4 = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) { // 列从上到下
                $t = ($j === 0 || $grids[$i][$j] === 'W') ? 0 : $v1[$i][$j - 1];
                $v1[$i][$j] = $grids[$i][$j] === 'E' ? $t + 1 : $t;
            }
            for ($j = $n - 1; $j >= 0; $j--) { // 列从下到上
                $t = ($j === $n - 1 || $grids[$i][$j] === 'W') ? 0 : $v2[$i][$j + 1];
                $v2[$i][$j] = $grids[$i][$j] === 'E' ? $t + 1 : $t;
            }
        }

        for ($j = 0; $j < $n; $j++) {
            for ($i = 0; $i < $m; $i++) { // 行从左到右
                $t = ($i === 0 || $grids[$i][$j] === 'W') ? 0 : $v3[$i - 1][$j];
                $v3[$i][$j] = $grids[$i][$j] === 'E' ? $t + 1 : $t;
            }
            for ($i = $m - 1; $i >= 0; $i--) { // 行从右到左
                $t = ($i === $m - 1 || $grids[$i][$j] === 'W') ? 0 : $v4[$i + 1][$j];
                $v4[$i][$j] = $grids[$i][$j] === 'E' ? $t + 1 : $t;
            }
        }

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grids[$i][$j] === '0') {
                    $res = max($res, $v1[$i][$j] + $v2[$i][$j] + $v3[$i][$j] + $v4[$i][$j]);
                }
            }
        }

        return $res;
    }

    public static function maxKilledEnemies2(array $grids): int
    {
        [$res, $m, $n] = [0, count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return $res;
        }
        $col = array_fill(0, $n, 0);
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($j === 0 || $grids[$i][$j - 1] === 'W') {
                    $row = 0;
                    for ($k = $j; $k < $n && $grids[$i][$k] !== 'W'; $k++) {
                        $row += $grids[$i][$k] === 'E';
                    }
                }
                if ($i === 0 || $grids[$i - 1][$j] === 'W') {
                    $col[$j] = 0;
                    for ($k = $i; $k < $m && $grids[$k][$j] !== 'W'; $k++) {
                        $col[$j] += $grids[$k][$j] === 'E';
                    }
                }
                if ($grids[$i][$j] === '0') {
                    $res = max($res, $row + $col[$j]);
                }
            }
        }

        return $res;
    }
}

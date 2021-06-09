<?php

declare(strict_types=1);

namespace leetcode;

class CellsWithOddValueInAMatrix
{
    public static function oddCells(int $m, int $n, array $indices): int
    {
        if ($m <= 0 || $n <= 0 || empty($indices)) {
            return 0;
        }

        [$cnt, $row, $col] = [0, array_fill(0, $m, 0), array_fill(0, $n, 0)];
        foreach ($indices as $item) {
            $row[$item[0]]++;
            $col[$item[1]]++;
        }
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if (($row[$i] + $col[$j]) % 2 !== 0) {
                    $cnt++;
                }
            }
        }

        return $cnt;
    }

    public static function oddCells2(int $m, int $n, array $indices): int
    {
        if ($m <= 0 || $n <= 0 || empty($indices)) {
            return 0;
        }
        [$cnt, $row, $col] = [0, array_fill(0, $m, false), array_fill(0, $n, false)];
        foreach ($indices as $item) {
            $row[$item[0]] ^= true;
            $col[$item[1]] ^= true;
        }
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $cnt += $row[$i] ^ $col[$j] ? 1 : 0;
            }
        }

        return $cnt;
    }
}

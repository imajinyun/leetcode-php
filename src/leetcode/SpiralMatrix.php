<?php

declare(strict_types=1);

namespace leetcode;

class SpiralMatrix
{
    public static function spiralOrder(array $matrix): array
    {
        if (empty($matrix) || empty($matrix[0])) {
            return $matrix;
        }
        $ans = [];
        [$rowi, $rown] = [0, count($matrix) - 1];
        [$coli, $coln] = [0, count($matrix[0]) - 1];
        while ($rowi <= $rown && $coli <= $coln) {
            // col: i -> n -> [rowi][j]
            for ($j = $coli; $j <= $coln; $j++) {
                array_push($ans, $matrix[$rowi][$j]);
            }
            $rowi++;

            // row: i -> n -> [j][coln]
            for ($j = $rowi; $j <= $rown; $j++) {
                array_push($ans, $matrix[$j][$coln]);
            }
            $coln--;

            if ($rowi <= $rown) {
                // col: n -> i -> [rown][j]
                for ($j = $coln; $j >= $coli; $j--) {
                    array_push($ans, $matrix[$rown][$j]);
                }
            }
            $rown--;

            if ($coli <= $coln) {
                // row: n -> i -> [j][coln]
                for ($j = $rown; $j >= $rowi; $j--) {
                    array_push($ans, $matrix[$j][$coli]);
                }
            }
            $coli++;
        }

        return $ans;
    }

    public static function spiralOrder2(array $matrix): array
    {
        if (empty($matrix) || empty($matrix[0])) {
            return $matrix;
        }
        [$ans, $dir] = [[], 0];
        [$rowi, $rown] = [0, count($matrix) - 1];
        [$coli, $coln] = [0, count($matrix[0]) - 1];
        while ($rowi <= $rown && $coli <= $coln) {
            switch ($dir) {
                case 0:
                    for ($col = $coli; $col <= $coln; $col++) {
                        array_push($ans, $matrix[$rowi][$col]);
                    }
                    $rowi++;
                    break;
                case 1:
                    for ($row = $rowi; $row <= $rown; $row++) {
                        array_push($ans, $matrix[$row][$coln]);
                    }
                    $coln--;
                    break;
                case 2:
                    for ($col = $coln; $col >= $coli; $col--) {
                        array_push($ans, $matrix[$rown][$col]);
                    }
                    $rown--;
                    break;
                case 3:
                    for ($row = $rown; $row >= $rowi; $row--) {
                        array_push($ans, $matrix[$row][$coli]);
                    }
                    $coli++;
                    break;
            }
            $dir = ($dir + 1) % 4;
        }

        return $ans;
    }
}

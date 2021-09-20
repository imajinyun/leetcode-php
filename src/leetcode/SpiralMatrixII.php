<?php

declare(strict_types=1);

namespace leetcode;

class SpiralMatrixII
{
    public static function generateMatrix(int $n): array
    {
        if ($n <= 0) {
            return [];
        }
        [$ans, $cnt] = [array_fill(0, $n, array_fill(0, $n, 0)), 1];
        [$rowi, $rown] = [0, $n - 1];
        [$coli, $coln] = [0, $n - 1];
        while ($rowi <= $rown && $coli <= $coln) {
            for ($j = $coli; $j <= $coln; $j++) {
                $ans[$rowi][$j] = $cnt++;
            }
            $rowi++;
            for ($i = $rowi; $i <= $rown; $i++) {
                $ans[$i][$coln] = $cnt++;
            }
            $coln--;
            for ($j = $coln; $j >= $coli; $j--) {
                $ans[$rown][$j] = $cnt++;
            }
            $rown--;
            for ($i = $rown; $i >= $rowi; $i--) {
                $ans[$i][$coli] = $cnt++;
            }
            $coli++;
        }

        return $ans;
    }

    public static function generateMatrix2(int $n): array
    {
        if ($n <= 0) {
            return [];
        }
        $ans = array_fill(0, $n, array_fill(0, $n, 0));
        $dir = [[0, 1], [1, 0], [0, -1], [-1, 0]];
        [$cur, $pos] = [0, [0, -1]];
        for ($k = 0; $k < $n * $n; $k++) {
            $v = $k + 1;
            $i = $pos[0] + $dir[$cur][0];
            $j = $pos[1] + $dir[$cur][1];
            if (!(($i >= 0 && $i < $n) && ($j >= 0 && $j < $n) && $ans[$i][$j] === 0)) {
                $cur = ($cur + 1) % 4;
                $i = $pos[0] + $dir[$cur][0];
                $j = $pos[1] + $dir[$cur][1];
            }
            $ans[$i][$j] = $v;
            $pos = [$i, $j];
        }

        return $ans;
    }
}

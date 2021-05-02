<?php

declare(strict_types=1);

namespace leetcode;

class ZigzagConversion
{
    public static function convert(string $str, int $numRows): string
    {
        [$m, $n] = [$numRows, strlen($str)];
        if ($m <= 1 || $m >= $n) {
            return $str;
        }
        [$s, $k] = ['', 2 * $m - 2] ;
        for ($i = 0; $i < $m; $i++) {
            for ($j = $i; $j < $n; $j += $k) {
                $s .= $str[$j];
                if ($i !== 0 && $i !== $numRows - 1) {
                    $t = $j + $k - 2 * $i;
                    if ($t < $n) {
                        $s .= $str[$t];
                    }
                }
            }
        }

        return $s;
    }

    public static function convert2(string $str, int $numRows): string
    {
        [$m, $n] = [$numRows, strlen($str)];
        if ($m <= 1 || $m >= $n) {
            return $str;
        }
        [$ans, $key, $step] = [array_fill(0, $m, ''), 0, 1];
        for ($i = 0; $i < $n; $i++) {
            $ans[$key] .= $str[$i];
            if ($key === 0) {
                $step = 1;
            } elseif ($key === $m - 1) {
                $step = -1;
            }
            $key += $step;
        }

        return implode('', $ans);
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class MedianOfTwoSortedArrays
{
    public static function findMedianSortedArrays(array $num1, array $num2): float
    {
        if (empty($num1) && empty($num2)) {
            return 0;
        }
        $i = $j = $k = 0;
        [$m, $n] = [count($num1), count($num2)];
        $res = array_fill(0, $m + $n, 0);
        while ($i < $m && $j < $n) {
            if ($num1[$i] < $num2[$j]) {
                $res[$k++] = $num1[$i++];
            } elseif ($num1[$i] > $num2[$j]) {
                $res[$k++] = $num2[$j++];
            } else {
                $res[$k++] = $num1[$i++];
                $res[$k++] = $num2[$j++];
            }
        }
        while ($i < $m) {
            $res[$k++] = $num1[$i++];
        }
        while ($j < $n) {
            $res[$k++] = $num2[$j++];
        }
        if (($cnt = count($res)) % 2 === 0) {
            $mid = $cnt / 2;

            return (float) ($res[$mid] + $res[$mid - 1]) / 2;
        }

        return (float) $res[$k / 2];
    }

    public static function findMedianSortedArrays2(array $num1, array $num2): float
    {
        $i = $j = $k = 0;
        $v1 = $v2 = -1;
        [$m, $n] = [count($num1), count($num2)];

        for (; $k <= ($m + $n) / 2; $k++) {
            if ($i < $m && $j < $n) {
                if ($num1[$i] < $num2[$j]) {
                    $v2 = $v1;
                    $v1 = $num1[$i];
                    $i++;
                } else {
                    $v2 = $v1;
                    $v1 = $num2[$j];
                    $j++;
                }
            } elseif ($i === $m) {
                $v2 = $v1;
                $v1 = $num2[$j];
                $j++;
            } elseif ($j === $n) {
                $v2 = $v1;
                $v1 = $num1[$i];
                $i++;
            }
        }

        if (($m + $n) % 2 === 0) {
            return ($v1 + $v2) * 1.0 / 2;
        }

        return $v1;
    }
}

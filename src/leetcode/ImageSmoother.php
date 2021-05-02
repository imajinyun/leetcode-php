<?php

declare(strict_types=1);

namespace leetcode;

class ImageSmoother
{
    public static function imageSmoother(array $arr): array
    {
        if (empty($arr)) {
            return [[]];
        }
        [$m, $n] = [count($arr), empty($arr[0]) ? 0 : count($arr[0])];
        $ans = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $cnt = 0;
                for ($row = $i - 1; $row <= $i + 1; $row++) {
                    for ($col = $j - 1; $col <= $j + 1; $col++) {
                        if (0 <= $row && $row < $m && 0 <= $col && $col < $n) {
                            $ans[$i][$j] += $arr[$row][$col];
                            $cnt++;
                        }
                    }
                }
                if ($cnt > 0) {
                    $ans[$i][$j] = (int) floor($ans[$i][$j] / $cnt);
                }
            }
        }

        return $ans;
    }

    public static function imageSmoother2(array $arr): array
    {
        $res = [[]];
        if (empty($arr)) {
            return $res;
        }

        foreach ($arr as $i => $item) {
            foreach ($item as $j => $v) {
                $tmp = [];

                // current row
                $tmp[] = $v;
                if (isset($item[$j - 1])) {
                    $tmp[] = $item[$j - 1];
                }
                if (isset($item[$j + 1])) {
                    $tmp[] = $item[$j + 1];
                }

                // previous row
                if (isset($arr[$i - 1][$j])) {
                    $tmp[] = $arr[$i - 1][$j];
                }
                if (isset($arr[$i - 1][$j - 1])) {
                    $tmp[] = $arr[$i - 1][$j - 1];
                }
                if (isset($arr[$i - 1][$j + 1])) {
                    $tmp[] = $arr[$i - 1][$j + 1];
                }

                // next row
                if (isset($arr[$i + 1][$j])) {
                    $tmp[] = $arr[$i + 1][$j];
                }
                if (isset($arr[$i + 1][$j - 1])) {
                    $tmp[] = $arr[$i + 1][$j - 1];
                }
                if (isset($arr[$i + 1][$j + 1])) {
                    $tmp[] = $arr[$i + 1][$j + 1];
                }
                $tmp = (int) floor(array_sum($tmp) / count($tmp));
                $res[$i][$j] = $tmp;
            }
        }

        return $res;
    }
}

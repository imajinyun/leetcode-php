<?php

declare(strict_types=1);

namespace leetcode;

class KthSmallestElementInASortedMatrix
{
    public static function kthSmallest(array $matrix, int $k): int
    {
        if (empty($matrix) || $k <= 0) {
            return 0;
        }
        $heap = new \SplMaxHeap();
        [$m, $n] = [count($matrix), count($matrix[0])];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $heap->insert($matrix[$i][$j]);
                if ($heap->count() > $k) {
                    $heap->extract();
                }
            }
        }

        return $heap->top();
    }

    public static function kthSmallest2(array $matrix, int $k): int
    {
        if (empty($matrix) || $k <= 0) {
            return 0;
        }
        [$m, $n] = [count($matrix), count($matrix[0])];
        [$low, $high] = [$matrix[0][0], $matrix[$m - 1][$n - 1]];
        $helper = static function (array $matrix, int $target) {
            $n = count($matrix);
            [$cnt, $i, $j] = [0, $n - 1, 0];
            while ($i >= 0 && $j < $n) {
                if ($matrix[$i][$j] > $target) {
                    $i--;
                } else {
                    $cnt += ($i + 1);
                    $j++;
                }
            }
            return $cnt;
        };

        while ($low < $high) {
            $mid = (int)(($high - $low) / 2) + $low;
            $cnt = $helper($matrix, $mid);
            if ($cnt < $k) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return $low;
    }
}

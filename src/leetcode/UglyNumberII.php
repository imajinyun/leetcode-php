<?php

declare(strict_types=1);

namespace leetcode;

class UglyNumberII
{
    public static function nthUglyNumber(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        if ($n === 1) {
            return 1;
        }
        $ans = [1];
        $i2 = $i3 = $i5 = 0;
        while (count($ans) < $n) {
            [$m2, $m3, $m5] = [$ans[$i2] * 2, $ans[$i3] * 3, $ans[$i5] * 5];
            $min = min($m2, min($m3, $m5));
            if ($min === $m2) {
                $i2++;
            }
            if ($min === $m3) {
                $i3++;
            }
            if ($min === $m5) {
                $i5++;
            }
            $ans[] = $min;
        }

        return array_pop($ans);
    }

    public static function nthUglyNumber2(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        if ($n === 1) {
            return 1;
        }
        $heap = new \SplMinHeap();
        $heap->insert(1);
        for ($i = 1; $i < $n; $i++) {
            $value = $heap->top();
            $heap->extract();
            while (!$heap->isEmpty() && $heap->top() === $value) {
                $value = $heap->top();
                $heap->extract();
            }
            $heap->insert($value * 2);
            $heap->insert($value * 3);
            $heap->insert($value * 5);
        }

        return $heap->top();
    }
}

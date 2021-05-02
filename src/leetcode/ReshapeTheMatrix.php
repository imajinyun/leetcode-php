<?php

declare(strict_types=1);

namespace leetcode;

class ReshapeTheMatrix
{
    public static function matrixReshape(array $nums, int $r, int $c): array
    {
        [$n, $m] = [count($nums), empty($nums[0]) ? 0 : count($nums[0])];
        if ($n * $m !== $r * $c) {
            return $nums;
        }
        $ans = [];
        for ($i = 0; $i < $r * $c; $i++) {
            $ans[$i / $c][$i % $c] = $nums[$i / $m][$i % $m];
        }

        return $ans;
    }
}

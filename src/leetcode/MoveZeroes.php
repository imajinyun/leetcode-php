<?php

declare(strict_types=1);

namespace leetcode;

class MoveZeroes
{
    public static function moveZeroes(array &$nums)
    {
        if (empty($nums)) {
            return null;
        }
        [$n, $j] = [count($nums), 0];
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] !== 0) {
                $nums[$j++] = $nums[$i];
            }
        }
        for (; $j < $n; $j++) {
            $nums[$j] = 0;
        }
    }
}

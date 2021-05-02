<?php

declare(strict_types=1);

namespace leetcode;

class TransposeMatrix
{
    public static function transpose(array $matrix): array
    {
        if (empty($matrix)) {
            return [];
        }
        [$ans, $m, $n] = [[], count($matrix), empty($matrix[0]) ? 0 : count($matrix[0])];
        for ($j = 0; $j < $n; $j++) {
            for ($i = 0; $i < $m; $i++) {
                $ans[$j][$i] = $matrix[$i][$j];
            }
        }

        return $ans;
    }
}

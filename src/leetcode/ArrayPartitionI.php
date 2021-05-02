<?php

declare(strict_types=1);

namespace leetcode;

class ArrayPartitionI
{
    public static function arrayPairSum(array $nums): int
    {
        $ans = 0;
        if (empty($nums)) {
            return 0;
        }
        sort($nums);
        [$ans, $n] = [0, count($nums)];
        for ($i = 0; $i < $n; $i += 2) {
            $ans += $nums[$i];
        }

        return $ans;
    }
}

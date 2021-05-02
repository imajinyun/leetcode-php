<?php

declare(strict_types=1);

namespace leetcode;

class MaxConsecutiveOnes
{
    public static function findMaxConsecutiveOnes(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $max = $tmp = 0;
        foreach ($nums as $num) {
            $tmp = $num === 0 ? 0 : $tmp + 1;
            $max = max($max, $tmp);
        }

        return $max;
    }

    public static function findMaxConsecutiveOnes2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$max, $nums] = [0, preg_split('/0+/', join('', $nums))];
        foreach ($nums as $num) {
            $max = max($max, strlen((string)$num));
        }

        return $max;
    }
}

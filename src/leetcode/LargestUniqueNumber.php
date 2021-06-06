<?php

declare(strict_types=1);

namespace leetcode;

class LargestUniqueNumber
{
    public static function largestUniqueNumber(array $nums): int
    {
        if (empty($nums)) {
            return -1;
        }
        $n = count($nums);
        if ($n === 1) {
            return $nums[0];
        }
        sort($nums);
        if ($nums[$n - 1] !== $nums[$n - 2]) {
            return $nums[$n - 1];
        }
        for ($i = $n - 2; $i > 0; $i--) {
            [$prev, $curr, $next] = [$nums[$i - 1], $nums[$i], $nums[$i + 1]];
            if ($prev !== $curr && $curr !== $next) {
                return $curr;
            }
        }

        return $nums[0] !== $nums[1] ? $nums[0] : -1;
    }

    public static function largestUniqueNumber2(array $nums): int
    {
        if (empty($nums)) {
            return -1;
        }
        $n = count($nums);
        [$map, $max, $min] = [[], -1, 1001];
        foreach ($nums as $num) {
            $map[$num] = ($map[$num] ?? 0) + 1;
            $max = $max > $num ? $max : $num;
            $min = $min < $num ? $min : $num;
        }
        [$ans, $tmp] = [-1, $max];
        while ($tmp >= $min) {
            if ($map[$tmp] === 1) {
                $ans = $tmp;
                break;
            }
            $tmp--;
        }

        return $ans;
    }
}

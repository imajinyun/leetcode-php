<?php

declare(strict_types=1);

namespace leetcode;

class DailyTemperatures
{
    public static function dailyTemperatures(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        $ans = array_fill(0, $n, 0);
        for ($i = 0; $i < $n; $i++) {
            $curr = $nums[$i];
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$j] > $curr) {
                    $ans[$i] = $j - $i;
                    break;
                }
            }
        }

        return $ans;
    }

    public static function dailyTemperatures2(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        [$ans, $stack] = [array_fill(0, $n, 0), []];
        for ($i = 0; $i < $n; $i++) {
            while ($stack && $nums[end($stack)] < $nums[$i]) {
                $k = array_pop($stack);
                $ans[$k] = $i - $k;
            }
            array_push($stack, $i);
        }

        return $ans;
    }
}

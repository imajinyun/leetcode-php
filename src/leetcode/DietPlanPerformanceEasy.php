<?php

declare(strict_types=1);

namespace leetcode;

class DietPlanPerformanceEasy
{
    public static function dietPlanPerformance(array $calories, int $k, int $lower, int $upper): int
    {
        if (empty($calories)) {
            return 0;
        }
        $res = $sum = 0;
        for ($i = 0; $i < $k - 1; $i++) {
            $sum += $calories[$i];
        }
        for ($i = $k - 1, $n = count($calories); $i < $n; $i++) {
            $sum += $calories[$i];
            if ($sum < $lower) {
                $res--;
            }
            if ($sum > $upper) {
                $res++;
            }
            $sum -= $calories[$i - $k + 1];
        }

        return $res;
    }
}

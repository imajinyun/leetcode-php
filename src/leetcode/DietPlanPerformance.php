<?php

declare(strict_types=1);

namespace leetcode;

class DietPlanPerformance
{
    public static function dietPlanPerformance(array $calories, int $k, int $lower, int $upper): int
    {
        if (empty($calories) || $k <= 0) {
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

    public static function dietPlanPerformance2(array $calories, int $k, int $lower, int $upper): int
    {
        if (empty($calories) || $k <= 0) {
            return 0;
        }
        [$res, $sum, $n] = [0, 0, count($calories)];
        for ($i = 0; $i < $n; $i++) {
            $sum += $calories[$i];
            if ($i >= $k) {
                $sum -= $calories[$i - $k];
            }
            if ($i >= $k - 1) {
                if ($sum < $lower) {
                    $res--;
                }
                if ($sum > $upper) {
                    $res++;
                }
            }
        }

        return $res;
    }
}

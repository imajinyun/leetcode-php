<?php

declare(strict_types=1);

namespace leetcode;

class DistanceBetweenBusStops
{
    public static function distanceBetweenBusStops(array $distance, int $start, int $destination): int
    {
        if (empty($distance) || $start < 0 || $destination < 0) {
            return 0;
        }
        if ($start > $destination) {
            $tmp = $start;
            $start = $destination;
            $destination = $tmp;
        }
        $res = $sum = 0;
        foreach ($distance as $i => $value) {
            if ($i >= $start && $i < $destination) {
                $res += $value;
            }
            $sum += $value;
        }

        return min($res, $sum - $res);
    }

    public static function distanceBetweenBusStops2(array $distance, int $start, int $destination): int
    {
        if (empty($distance) || $start < 0 || $destination < 0) {
            return 0;
        }
        [$a, $b] = [min($start, $destination), max($start, $destination)];
        $slice = array_slice($distance, $a, $b - $a);

        return min(array_sum($slice), array_sum($distance) - array_sum($slice));
    }
}

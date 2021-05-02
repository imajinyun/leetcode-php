<?php

declare(strict_types=1);

namespace leetcode;

class CanPlaceFlowers
{
    public static function canPlaceFlowers(array $flowerbed, int $k): bool
    {
        if (empty($flowerbed)) {
            return false;
        }
        [$m, $n] = [0, count($flowerbed)];
        for ($i = 0; $i < $n && $m < $k; $i++) {
            if ($flowerbed[$i] === 0) {
                $prev = $i === 0 ? 0 : $flowerbed[$i - 1];
                $next = $i === $n - 1 ? 0 : $flowerbed[$i + 1];
                if ($next === 0 && $prev === 0) {
                    $flowerbed[$i] = 1;
                    $m++;
                }
            }
        }

        return $m === $k;
    }

    public static function canPlaceFlowers2(array $flowerbed, int $k): bool
    {
        if (empty($flowerbed)) {
            return false;
        }
        [$m, $n] = [0, count($flowerbed)];
        $dp = array_fill(0, $n + 2, 0);
        for ($i = 0; $i < $n; $i++) {
            $dp[$i + 1] = $flowerbed[$i];
        }
        for ($i = 1; $i < $n + 2; $i++) {
            if ($dp[$i] === 0 && $dp[$i - 1] === 0 && $dp[$i + 1] === 0) {
                $dp[$i] = 1;
                $m++;
            }
        }

        return $m >= $k;
    }
}

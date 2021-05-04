<?php

namespace leetcode;

class DistributeCandies
{
    public static function distributeCandies(array $candies): int
    {
        if (empty($candies)) {
            return 0;
        }
        sort($candies);
        [$cnt, $len] = [1, count($candies)];
        for ($i = 1; $i < $len && $cnt < $len / 2; $i++) {
            if ($candies[$i] > $candies[$i - 1]) {
                $cnt++;
            }
        }

        return $cnt;
    }

    public static function distributeCandies2(array $candies): int
    {
        if (empty($candies)) {
            return 0;
        }
        [$map, $len] = [[], count($candies)];
        foreach ($candies as $candy) {
            $map[$candy] = true;
        }

        return min(count($map), $len / 2);
    }
}

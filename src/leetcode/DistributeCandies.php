<?php

namespace leetcode;

class DistributeCandies
{
    public static function distributeCandies(array $candies): int
    {
        [$res, $len] = [0, count($candies)];
        if ($len === 0) {
            return $res;
        }
        $dp = array_fill(0, $len, 1);
        for ($i = 1; $i < $len; $i++) {
            if ($candies[$i] > $candies[$i - 1]) {
                $dp[$i] = $dp[$i - 1] + 1;
            }
        }
        for ($i = $len - 2; $i >= 0; $i--) {
            if ($candies[$i] > $candies[$i + 1]) {
                $dp[$i] = max($dp[$i], $dp[$i + 1] + 1);
            }
        }
        $res = array_sum($dp);

        return $res;
    }

    public static function distributeCandies2(array $candies): int
    {
        [$res, $len] = [0, count($candies)];
        if ($len === 0) {
            return $res;
        }
        sort($candies);
        $cnt = 1;
        for ($i = 1; $i < $len && $cnt < $len / 2; $i++) {
            if ($candies[$i] > $candies[$i - 1]) {
                $cnt++;
            }
        }

        return $cnt;
    }

    public static function distributeCandies3(array $candies): int
    {
        [$res, $len] = [0, count($candies)];
        if ($len === 0) {
            return $res;
        }
        $map = [];
        foreach ($candies as $candy) {
            $map[$candy] = true;
        }
        $res = min(count($map), $len / 2);

        return $res;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class SingleNumber
{
    public static function singleNumber(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$map, $n] = [[], count($nums)];
        for ($i = 0; $i < $n; $i++) {
            if (isset($map[$nums[$i]])) {
                unset($map[$nums[$i]]);
            } else {
                $map[$nums[$i]] = $i;
            }
        }

        return current(array_keys($map));
    }

    public static function singleNumber2(array $nums): int
    {
        $ans = 0;
        if (empty($nums)) {
            return $ans;
        }
        foreach ($nums as $num) {
            $ans ^= $num;
        }

        return $ans;
    }
}

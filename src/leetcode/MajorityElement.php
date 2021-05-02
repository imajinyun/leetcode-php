<?php

declare(strict_types=1);

namespace leetcode;

class MajorityElement
{
    public static function majorityElement(array $nums): int
    {
        [$res, $map, $cnt] = [0, [], count($nums)];
        if (empty($nums)) {
            return $res;
        }
        foreach ($nums as $num) {
            $map[$num] = isset($map[$num]) ? ++$map[$num] : 1;
            if ($map[$num] > $cnt / 2) {
                $res = $num;
                break;
            }
        }

        return $res;
    }

    public static function majorityElement2(array $nums): int
    {
        [$res, $cnt] = [0, 0];
        if (empty($nums)) {
            return $res;
        }
        foreach ($nums as $num) {
            if ($cnt === 0) {
                $res = $num;
            }
            $res === $num ? $cnt++ : $cnt--;
        }

        return $res;
    }

    public static function majorityElement3(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        sort($nums);

        return $nums[floor(count($nums) / 2)];
    }
}

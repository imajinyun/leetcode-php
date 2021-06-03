<?php

declare(strict_types=1);

namespace leetcode;

class CheckIfANumberIsMajorityElementInASortedArrayEasy
{
    public static function isMajorityElement(array $nums, int $target): bool
    {
        if (empty($nums) || $target <= 0) {
            return false;
        }
        if (($n = count($nums)) === 1) {
            return $nums[0] === $target;
        }

        $cnt = 0;
        foreach ($nums as $num) {
            if ($num === $target) {
                $cnt++;
            }
        }

        return $cnt * 2 > $n;
    }
}

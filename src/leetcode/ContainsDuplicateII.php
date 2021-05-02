<?php

declare(strict_types=1);

namespace leetcode;

class ContainsDuplicateII
{
    public static function containsNearbyDuplicate(array $nums, int $k): bool
    {
        if (empty($nums) || $k <= 0) {
            return false;
        }
        $map = [];
        foreach ($nums as $key => $num) {
            if (isset($map[$num]) && $key - $map[$num] <= $k) {
                return true;
            }
            $map[$num] = $key;
        }

        return false;
    }
}

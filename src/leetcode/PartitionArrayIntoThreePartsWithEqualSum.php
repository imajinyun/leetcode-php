<?php

declare(strict_types=1);

namespace leetcode;

class PartitionArrayIntoThreePartsWithEqualSum
{
    public static function canThreePartsEqualSum(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        $sum = array_sum($arr);
        if ($sum % 3 !== 0) {
            return false;
        }
        $part = $cnt = 0;
        foreach ($arr as $num) {
            $part += $num;
            if ($part === (int) ($sum / 3)) {
                $part = 0;
                $cnt++;
                if ($cnt === 3) {
                    return true;
                }
            }
        }

        return false;
    }
}

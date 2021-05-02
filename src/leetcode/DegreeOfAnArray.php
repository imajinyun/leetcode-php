<?php

declare(strict_types=1);

namespace leetcode;

class DegreeOfAnArray
{
    public static function findShortestSubArray(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $cnt = $map = [];
        $res = $degree = 0;
        foreach ($nums as $k => $v) {
            if (!isset($map[$v])) {
                $map[$v] = $k;
            }
            if (!isset($cnt[$v])) {
                $cnt[$v] = 0;
            }
            $cnt[$v]++;
            if ($cnt[$v] > $degree) {
                $degree = $cnt[$v];
                $res = $k - $map[$v] + 1;
            } elseif ($cnt[$v] === $degree) {
                $res = min($res, $k - $map[$v] + 1);
            }
        }

        return $res;
    }
}

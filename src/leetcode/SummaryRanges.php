<?php

declare(strict_types=1);

namespace leetcode;

class SummaryRanges
{
    public static function summaryRanges(array $nums): array
    {
        [$ans, $n] = [[], count($nums)];
        if (empty($nums)) {
            return $ans;
        }
        if ($n === 1) {
            $ans[] = (string)$nums[0];
            return $ans;
        }
        for ($i = 0; $i < $n; $i++) {
            $tmp = $nums[$i];
            while ($i + 1 < $n && ($nums[$i + 1] - $nums[$i]) === 1) {
                $i++;
            }
            if ($tmp !== $nums[$i]) {
                $ans[] = $tmp.'->'.$nums[$i];
            } else {
                $ans[] = (string)$tmp;
            }
        }

        return $ans;
    }
}

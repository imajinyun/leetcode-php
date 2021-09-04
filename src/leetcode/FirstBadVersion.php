<?php

declare(strict_types=1);

namespace leetcode;

class FirstBadVersion
{
    public static function firstBadVersion(int $m, int $n): int
    {
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        [$low, $high] = [1, $m];
        while ($low <= $high) {
            $mid = $low + (int)(($high - $low) / 2);
            if (self::isBadVersion($mid, $n)) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return $low;
    }

    public static function isBadVersion(int $m, int $n): bool
    {
        $map = array_fill(0, $n + 1, false);
        $map[$n] = true;

        return $map[$m];
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class HeightChecker
{
    public static function heightChecker(array $heights): int
    {
        if (empty($heights)) {
            return 0;
        }
        $n = count($heights);
        $map = array_fill(0, $n + 1, 0);
        foreach ($heights as $height) {
            $map[$height]++;
        }
        [$prev, $curr] = [0, 1];
        foreach ($heights as $height) {
            while ($map[$curr] === 0) {
                $curr++;
            }
            if ($curr !== $height) {
                $prev++;
            }
            $map[$curr]--;
        }

        return $prev;
    }
}

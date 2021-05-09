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
        $map = array_fill(0, 101, 0);
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

    public static function heightChecker2(array $heights): int
    {
        if (empty($heights)) {
            return 0;
        }
        $ordered = $heights;
        sort($ordered);
        [$cnt, $n] = [0, count($heights)];
        for ($i = 0; $i < $n; $i++) {
            if ($ordered[$i] !== $heights[$i]) {
                $cnt++;
            }
        }

        return $cnt;
    }
}

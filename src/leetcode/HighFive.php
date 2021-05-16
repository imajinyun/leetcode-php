<?php

declare(strict_types=1);

namespace leetcode;

class HighFive
{
    public static function highFive(array $items): array
    {
        if (empty($items)) {
            return [];
        }
        $map = [];
        foreach ($items as $item) {
            [$sid, $score] = $item;
            $scores = $map[$sid] ?? array_fill(0, 5, 0);
            $j = 0;
            for ($i = 1; $i < 5; $i++) {
                if ($scores[$i] < $scores[$j]) {
                    $j = $i;
                }
            }
            if ($score > $scores[$j]) {
                $scores[$j] = $score;
            }
            $map[$sid] = $scores;
        }
        [$ans, $keys] = [[], array_keys($map)];
        sort($keys);
        foreach ($keys as $sid) {
            $sum = (int) (array_sum($map[$sid]) / 5);
            array_push($ans, [$sid, $sum]);
        }

        return $ans;
    }
}

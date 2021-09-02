<?php

declare(strict_types=1);

namespace leetcode;

class MinimumFallingPathSumII
{
    public static function minFallingPathSum(array $grid): int
    {
        if (empty($grid)) {
            return 0;
        }
        [$m, $n] = [count($grid), count($grid[0])];
        $curr = $grid[0];
        for ($i = 1; $i < $m; $i++) {
            $next = $data = [];
            self::helper($curr, $data);
            $vals = array_slice($data, 0, 2);
            for ($j = 0; $j < $n; $j++) {
                $temp = $vals[0][1] === $j ? $vals[1][0] : $vals[0][0];
                array_push($next, $grid[$i][$j] + $temp);
            }
            $curr = $next;
        }

        return min($curr);
    }

    private static function helper(array $item, array &$data): void
    {
        foreach ($item as $key => $val) {
            $data[] = [$val, $key];
        }

        array_multisort($data, SORT_ASC);
    }
}

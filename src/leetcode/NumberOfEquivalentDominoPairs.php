<?php

declare(strict_types=1);

namespace leetcode;

class NumberOfEquivalentDominoPairs
{
    public static function numEquivDominoPairs(array $dominoes): int
    {
        [$m, $n] = [count($dominoes), is_array($dominoes) ? count($dominoes[0]) : 0];
        if ($m === 0 || $n === 0) {
            return 0;
        }
        [$cnt, $map] = [0, []];
        foreach ($dominoes as $dominoe) {
            $max = max($dominoe[0], $dominoe[1], $min = min($dominoe[0], $dominoe[1]));
            $key = $min * 10 + $max;
            $pairs = $map[$key] ?? 0;
            $map[$key] = 1 + $pairs;
            $cnt += $pairs;
        }

        return $cnt;
    }
}

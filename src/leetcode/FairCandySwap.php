<?php

declare(strict_types=1);

namespace leetcode;

class FairCandySwap
{
    public static function fairCandySwap(array $a, array $b): array
    {
        if (empty($a) || empty($b)) {
            return [];
        }
        [$aSum, $bSum] = [array_sum($a), array_sum($b)];
        $dif = (int)(($aSum - $bSum) / 2);
        for ($i = 0, $m = count($a); $i < $m; $i++) {
            for ($j = 0, $n = count($b); $j < $n; $j++) {
                if ($a[$i] - $b[$j] === $dif) {
                    return [$a[$i], $b[$j]];
                }
            }
        }

        return [];
    }

    public static function fairCandySwap2(array $a, array $b): array
    {
        if (empty($a) || empty($b)) {
            return [];
        }
        [$map, $dif] = [[], (int)((array_sum($a) - array_sum($b)) / 2)];
        foreach ($a as $v) {
            if (! isset($map[$v])) {
                $map[$v] = $v;
            }
        }
        foreach ($b as $v) {
            if (isset($map[$dif + $v])) {
                return [$dif + $v, $v];
            }
        }

        return [];
    }
}

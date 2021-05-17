<?php

declare(strict_types=1);

namespace leetcode;

class RelativeSortArray
{
    public static function relativeSortArray(array $a, array $b): array
    {
        if (empty($a) || empty($b)) {
            return [];
        }
        [$n, $k] = [1001, 0];
        $cnt = array_fill(0, $n, 0);
        $ans = [];
        foreach ($a as $v) {
            $cnt[$v] = ($cnt[$v] ?? 0) + 1;
        }
        foreach ($b as $v) {
            while ($cnt[$v]-- > 0) {
                $ans[$k++] = $v;
            }
        }
        for ($i = 0; $i < $n; $i++) {
            while (isset($cnt[$i]) && $cnt[$i]-- > 0) {
                $ans[$k++] = $i;
            }
        }

        return $ans;
    }
}

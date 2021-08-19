<?php

declare(strict_types=1);

namespace leetcode;

class NextGreaterElementI
{
    public static function nextGreaterElement(array $num1, array $num2): array
    {
        if (empty($num1) || empty($num2)) {
            return [];
        }
        $ans = $stack = $map = [];
        foreach ($num2 as $num) {
            while ($stack && end($stack) < $num) {
                $map[array_pop($stack)] = $num;
            }
            array_push($stack, $num);
        }
        foreach ($num1 as $num) {
            array_push($ans, $map[$num] ?? -1);
        }

        return $ans;
    }
}

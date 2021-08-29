<?php

declare(strict_types=1);

namespace leetcode;

class IntegerToRoman
{
    public static function intToRoman(int $num): string
    {
        if (empty($num)) {
            return '';
        }
        $numMap = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
        $strMap = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];

        $str = '';
        for ($i = 0, $n = count($numMap); $i < $n; $i++) {
            while ($num >= $numMap[$i]) {
                $num -= $numMap[$i];
                $str .= $strMap[$i];
            }
        }

        return $str;
    }
}

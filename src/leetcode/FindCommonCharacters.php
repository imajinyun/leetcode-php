<?php

declare(strict_types=1);

namespace leetcode;

class FindCommonCharacters
{
    public static function commonChars(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        [$start, $cnt, $end] = [97, 26, 122];
        [$ans, $map] = [[], array_fill($start, $cnt, PHP_INT_MAX)];
        foreach ($arr as $str) {
            $tmp = array_fill($start, $cnt, 0);
            for ($i = 0, $n = strlen($str); $i < $n; $i++) {
                $tmp[ord($str[$i])]++;
            }
            for ($i = $start; $i <= $end; $i++) {
                $map[$i] = min($map[$i], $tmp[$i]);
            }
        }
        for ($i = $start; $i <= $end; $i++) {
            while ($map[$i]-- > 0) {
                $ans[] = chr($i);
            }
        }

        return $ans;
    }
}

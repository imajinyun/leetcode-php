<?php

declare(strict_types=1);

namespace leetcode;

class ReverseString
{
    public static function reverseString(string &$s): void
    {
        if (empty($s)) {
            return;
        }
        [$i, $j] = [0, strlen($s) - 1];
        while ($i < $j) {
            [$s[$i], $s[$j]] = [$s[$j], $s[$i]];
            $i++;
            $j--;
        }
    }
}

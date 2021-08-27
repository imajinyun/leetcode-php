<?php

declare(strict_types=1);

namespace leetcode;

class ExcelSheetColumnNumber
{
    public static function titleToNumber(string $title): int
    {
        if (empty($title)) {
            return 0;
        }
        [$ans, $n] = [0, strlen($title)];
        for ($i = 0; $i < $n; $i++) {
            $ans *= 26;
            $ans += ord(strtoupper($title[$i])) - ord('A') + 1;
        }

        return $ans;
    }

    public static function titleToNumber2(string $title): int
    {
        if (empty($title)) {
            return 0;
        }
        [$ans, $map] = [0, []];
        for ($i = 1; $i < 27; $i++) {
            $map[strtoupper(chr($i + 65 - 1))] = $i;
        }
        for ($i = 0, $n = strlen($title); $i < $n; $i++) {
            $ans = $ans * 26 + $map[strtoupper($title[$i])];
        }

        return $ans;
    }
}

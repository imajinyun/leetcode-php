<?php

declare(strict_types=1);

namespace leetcode;

class FirstUniqueCharacterInAString
{
    public static function firstUniqChar(string $s): int
    {
        if (empty($s)) {
            return 0;
        }
        $n = strlen($s);
        $map = array_fill(0, 26, 0);
        for ($i = 0; $i < $n; $i++) {
            $map[ord($s[$i]) - 26] = ($map[ord($s[$i]) - 26] ?? 0) + 1;
        }
        for ($i = 0; $i < $n; $i++) {
            if ($map[ord($s[$i]) - 26] === 1) {
                return $i;
            }
        }

        return -1;
    }
}

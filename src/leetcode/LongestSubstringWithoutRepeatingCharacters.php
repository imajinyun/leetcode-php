<?php

declare(strict_types=1);

namespace leetcode;

class LongestSubstringWithoutRepeatingCharacters
{
    public static function lengthOfLongestSubstring(string $s): int
    {
        $map = [];
        $max = $len = 0;

        $n = strlen($s);
        for ($i = 0; $i < $n; $i++) {
            $key = $s[$i];
            if (isset($map[$key])) {
                $max = max($max, $map[$key] + 1);
            }
            $map[$key] = $i;
            $len = max($len, $i - $max + 1);
        }

        return $len;
    }

    public static function lengthOfLongestSubstring2(string $s): int
    {
        [$ans, $n] = [0, strlen($s)];
        if ($n === 0) {
            return $ans;
        }
        [$left, $right, $win] = [0, 0, []];
        while ($right < $n) {
            $c = $s[$right];
            $win[$c] = ($win[$c] ?? 0) + 1;
            $right++;
            while ($win[$c] > 1) {
                $d = $s[$left];
                $win[$d]--;
                $left++;
            }
            $ans = max($ans, $right - $left);
        }

        return $ans;
    }
}

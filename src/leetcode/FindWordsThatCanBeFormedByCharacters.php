<?php

declare(strict_types=1);

namespace leetcode;

class FindWordsThatCanBeFormedByCharacters
{
    public static function countCharacters(array $words, string $chars): int
    {
        if (empty($words) || empty($chars)) {
            return 0;
        }
        [$cnt, $map] = [0, array_fill(0, 26, 0)];
        for ($i = 0, $n = strlen($chars); $i < $n; $i++) {
            $map[ord($chars[$i]) - ord('a')]++;
        }
        foreach ($words as $word) {
            [$len, $see] = [0, $map];
            for ($i = 0, $n = strlen($word); $i < $n; $i++) {
                $j = ord($word[$i]) - ord('a');
                if ($see[$j] > 0) {
                    $see[$j]--;
                    $len++;
                }
            }

            if ($len === strlen($word)) {
                $cnt += $len;
            }
        }

        return $cnt;
    }
}

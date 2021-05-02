<?php

declare(strict_types=1);

namespace leetcode;

class WordBreak
{
    public static function wordBreak(string $s, array $words): bool
    {
        if (strlen($s) <= 0 || count($words) <= 0) {
            return false;
        }
        $dicts = array_flip(array_unique(array_values($words)));
        $memo = array_fill(0, strlen($s), -1);

        return self::helper($s, $dicts, 0, $memo);
    }

    private static function helper(
        string $s,
        array &$dicts,
        int $start,
        array &$memo
    ): bool {
        $n = strlen($s);
        if ($start >= $n) {
            return true;
        }
        if (isset($memo[$start]) && $memo[$start] !== -1) {
            return (bool) $memo[$start];
        }
        for ($i = $start; $i <= $n; $i++) {
            $key = substr($s, $start, $i - $start);
            if (isset($dicts[$key]) && self::helper($s, $dicts, $i, $memo)) {
                return (bool) ($memo[$start] = 1);
            }
        }

        return (bool) ($memo[$start] = 0);
    }

    public static function wordBreak2(string $s, array $words)
    {
        if (strlen($s) <= 0 || count($words) <= 0) {
            return false;
        }
        $dicts = array_flip(array_unique(array_values($words)));
        $dp = array_fill(0, strlen($s) + 1, false);
        [$dp[0], $n] = [true, count($dp)];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
                $key = substr($s, $j, $i - $j);
                if (isset($dicts[$key]) && $dp[$j]) {
                    $dp[$i] = true;
                    break;
                }
            }
        }

        return array_pop($dp);
    }

    public static function wordBreak3(string $s, array $words): bool
    {
        $n = strlen($s);
        if ($n <= 0 || count($words) <= 0) {
            return false;
        }
        $dicts = array_flip(array_unique(array_values($words)));
        $visited = array_fill(0, $n, false);
        $queue = [0];
        while ($queue) {
            $start = $queue[0];
            array_pop($queue);
            if (!$visited[$start]) {
                for ($i = $start + 1; $i <= $n; $i++) {
                    $key = substr($s, $start, $i - $start);
                    if (isset($dicts[$key])) {
                        $queue[] = $i;
                        if ($i === $n) {
                            return true;
                        }
                    }
                }
                $visited[$start] = true;
            }
        }

        return false;
    }
}

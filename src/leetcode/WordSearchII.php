<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\Trie;

class WordSearchII
{
    public static function findWords(array $board, array $words): array
    {
        $ans = $visited = [];
        $trie = new Trie();
        foreach ($words as $word) {
            $trie->insert($word);
        }
        [$m, $n] = [count($board), count($board[0])];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                self::dfs($board, $visited, '', $i, $j, $trie, $ans);
            }
        }

        return $ans;
    }

    private static function dfs(array $board, array &$visited, string $s, int $i, int $j, Trie $trie, array &$ans)
    {
        [$m, $n, $default] = [count($board), count($board[0]), []];
        if ($i < 0 || $i >= $m || $j < 0 || $j >= $n) {
            return $default;
        }

        if (isset($visited[$i][$j]) && $visited[$i][$j]) {
            return $default;
        }

        $s .= $board[$i][$j];
        if (!$trie->startsWith($s)) {
            return $default;
        }

        if ($trie->search($s)) {
            $ans[] = $s;
        }

        $visited[$i][$j] = true;
        self::dfs($board, $visited, $s, $i - 1, $j, $trie, $ans);
        self::dfs($board, $visited, $s, $i + 1, $j, $trie, $ans);
        self::dfs($board, $visited, $s, $i, $j - 1, $trie, $ans);
        self::dfs($board, $visited, $s, $i, $j + 1, $trie, $ans);
        $visited[$i][$j] = false;

        return $ans;
    }
}

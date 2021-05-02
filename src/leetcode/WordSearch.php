<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\Trie;

class WordSearch
{
    public static function exist(array $board, string $word): bool
    {
        $ans = $visited = [];
        $trie = new Trie();
        for ($i = 0, $n = strlen($word); $i < $n; $i++) {
            $trie->insert($word[$i]);
        }
        [$m, $n] = [count($board), count($board[0])];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                self::search($board, $visited, '', $i, $j, $trie, $ans);
            }
        }

        return $ans ? true : false;
    }

    public static function search(array $board, array &$visited, string $s, int $x, int $y, Trie $trie, &$ans)
    {
        [$m, $n, $default] = [count($board), count($board[0]), []];
        if ($x < 0 || $x >= $m || $y < 0 || $y >= $n) {
            return $default;
        }
        if (isset($visited[$x][$y]) && $visited[$x][$y]) {
            return $default;
        }
        $s .= $board[$x][$y];
        if (!$trie->startsWith($s)) {
            return $default;
        }
        if ($trie->search($s)) {
            $ans[] = $s;
        }
        $visited[$x][$y] = true;
        self::search($board, $visited, $s, $x - 1, $y, $trie, $ans);
        self::search($board, $visited, $s, $x + 1, $y, $trie, $ans);
        self::search($board, $visited, $s, $x, $y - 1, $trie, $ans);
        self::search($board, $visited, $s, $x, $y + 1, $trie, $ans);
        $visited[$x][$y] = false;

        return $ans;
    }
}

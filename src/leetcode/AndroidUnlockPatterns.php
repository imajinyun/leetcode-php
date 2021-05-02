<?php

declare(strict_types=1);

namespace leetcode;

class AndroidUnlockPatterns
{
    public static function numberOfPatterns(int $m, int $n): int
    {
        $ans = 0;
        if ($m <= 0 || $m > 9 || $n <= 0 || $n > 9) {
            return $ans;
        }
        $visited = array_fill(0, 10, false);
        $jumps = array_fill(0, 10, array_fill(0, 10, 0));
        $jumps[1][3] = $jumps[3][1] = 2;
        $jumps[1][7] = $jumps[7][1] = 4;
        $jumps[3][9] = $jumps[9][3] = 6;
        $jumps[7][9] = $jumps[9][7] = 8;
        $jumps[4][6] = $jumps[6][4] = $jumps[2][8] = $jumps[8][2] = 5;
        $jumps[1][9] = $jumps[9][1] = $jumps[3][7] = $jumps[7][3] = 5;
        $ans += self::dfs(1, 1, $m, $n, $jumps, $visited, 0) * 4;
        $ans += self::dfs(2, 1, $m, $n, $jumps, $visited, 0) * 4;
        $ans += self::dfs(5, 1, $m, $n, $jumps, $visited, 0);

        return $ans;
    }

    public static function numberOfPatterns2(int $m, int $n): int
    {
        $ans = 0;
        if ($m <= 0 || $m > 9 || $n <= 0 || $n > 9) {
            return $ans;
        }
        $visited = array_fill(0, 10, false);
        $jumps[1][3] = $jumps[3][1] = 2;
        $jumps[1][7] = $jumps[7][1] = 4;
        $jumps[7][9] = $jumps[9][7] = 8;
        $jumps[3][9] = $jumps[9][3] = 6;
        $jumps[4][6] = $jumps[6][4] = $jumps[2][8] = $jumps[8][2] = 5;
        $jumps[1][9] = $jumps[9][1] = $jumps[3][7] = $jumps[7][3] = 5;
        for ($i = $m; $i <= $n; $i++) {
            $ans += self::dfs2(1, $jumps, $visited, $i - 1) * 4;
            $ans += self::dfs2(2, $jumps, $visited, $i - 1) * 4;
            $ans += self::dfs2(5, $jumps, $visited, $i - 1);
        }

        return $ans;
    }

    private static function dfs(
        int $curr,
        int $len,
        int $m,
        int $n,
        array &$jumps,
        array &$visited,
        int $ans
    ) {
        if ($len >= $m) {
            ++$ans;
        }
        ++$len;
        if ($len > $n) {
            return $ans;
        }
        $visited[$curr] = true;
        for ($next = 1; $next < 10; $next++) {
            $jump = $jumps[$curr][$next];
            if (! $visited[$next] && ($jump === 0 || $visited[$jump])) {
                $ans = self::dfs($next, $len, $m, $n, $jumps, $visited, $ans);
            }
        }
        $visited[$curr] = false;

        return $ans;
    }

    private static function dfs2(
        int $curr,
        array &$jumps,
        array &$visited,
        int $remain
    ) {
        if ($remain === 0) {
            return 1;
        }
        $ans = 0;
        $visited[$curr] = true;
        for ($next = 1; $next < 10; $next++) {
            $jump = $jumps[$curr][$next];
            if (! $visited[$next] && ($jump === 0 || $visited[$jump])) {
                $ans += self::dfs2($next, $jumps, $visited, $remain - 1);
            }
        }
        $visited[$curr] = false;

        return $ans;
    }
}

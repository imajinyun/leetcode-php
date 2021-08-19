<?php

declare(strict_types=1);

namespace leetcode;

class FindWinnerOnATicTacToeGame
{
    public static function tictactoe(array $moves): string
    {
        if (empty($moves)) {
            return '';
        }
        $row = $col = array_fill(0, 2, array_fill(0, 3, 0));
        $d1 = $d2 = array_fill(0, 2, 0);
        foreach ($moves as $k => $v) {
            [$r, $c, $i] = [$v[0], $v[1], $k % 2];
            if (++$row[$i][$r] === 3 ||
                ++$col[$i][$c] === 3 ||
                ($r === $c && ++$d1[$i] === 3) ||
                ($r + $c === 2 && ++$d2[$i] === 3)) {
                return $i === 0 ? 'A' : 'B';
            }
        }

        return count($moves) === 9 ? 'Draw' : 'Pending';
    }

    public static function tictactoe2(array $moves): string
    {
        if (empty($moves)) {
            return '';
        }
        $n = 8;
        $a = $b = array_fill(0, $n, 0);
        foreach ($moves as $k => $v) {
            [$r, $c] = [$v[0], $v[1]];
            if ($k % 2 === 0) {
                $player = & $a;
            } else {
                $player = & $b;
            }
            $player[$r]++;
            $player[$c + 3]++;
            if ($r === $c) {
                $player[6]++;
            }
            if ($r + $c === 2) {
                $player[7]++;
            }
        }
        for ($i = 0; $i < $n; $i++) {
            if ($a[$i] === 3) {
                return 'A';
            }
            if ($b[$i] === 3) {
                return 'B';
            }
        }

        return count($moves) === 9 ? 'Draw' : 'Pending';
    }
}

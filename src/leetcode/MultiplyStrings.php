<?php

declare(strict_types=1);

namespace leetcode;

class MultiplyStrings
{
    public static function multiply(string $p, string $q): string
    {
        if (empty($p) || empty($q)) {
            return '0';
        }
        if ($p === '0' && $q === '0') {
            return '0';
        }

        [$m, $n] = [strlen($p), strlen($q)];
        $map = array_fill(0, $m + $n, 0);
        for ($i = $m - 1; $i >= 0; $i--) {
            for ($j = $n - 1; $j >= 0; $j--) {
                [$k, $v] = [$i + $j + 1, $p[$i] * $q[$j]];
                $sum = $v + $map[$k];
                $map[$k] = $sum % 10;
                $map[$k - 1] += intdiv($sum, 10);
            }
        }
        $s = '';
        for ($i = 0; $i < ($m + $n) && $map[$i] === 0; $i++);
        for (; $i < ($m + $n); $i++) {
            $s .= $map[$i];
        }

        return strlen($s) === 0 ? '0' : $s;
    }
}

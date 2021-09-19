<?php

declare(strict_types=1);

namespace leetcode;

class BackspaceStringCompare
{
    public static function backspaceCompare(string $s, string $t): bool
    {
        if (empty($s) || empty($t)) {
            return false;
        }
        $helper = static function (string &$s, int &$i) {
            $n = 0;
            while ($i >= 0 && ($n > 0 || $s[$i] === '#')) {
                $n = $s[$i] === '#' ? $n + 1 : $n - 1;
                $i--;
            }
            return $i >= 0 ? $s[$i] : '#';
        };
        [$i, $j] = [strlen($s) - 1, strlen($t) - 1];
        while ($i >= 0 || $j >= 0) {
            $p = $helper($s, $i);
            $q = $helper($t, $j);
            if ($p !== $q) {
                return false;
            }
            $i--;
            $j--;
        }

        return true;
    }

    public static function backspaceCompare2(string $s, string $t): bool
    {
        if (empty($s) || empty($t)) {
            return false;
        }
        [$i, $j] = [strlen($s) - 1, strlen($t) - 1];
        $m = $n = 0;
        while (true) {
            while ($i >= 0 && ($m > 0 || $s[$i] === '#')) {
                $m += $s[$i] === '#' ? 1 : -1;
                $i--;
            }
            while ($j >= 0 && ($n > 0 || $t[$j] === '#')) {
                $n += $t[$j] === '#' ? 1 : -1;
                $j--;
            }
            if ($i >= 0 && $j >= 0 && $s[$i] === $t[$j]) {
                $i--;
                $j--;
            } else {
                break;
            }
        }

        return $i === -1 && $j === -1;
    }

    public static function backspaceCompare3(string $s, string $t): bool
    {
        if (empty($s) || empty($t)) {
            return false;
        }
        $helper = static function (string $s, array $stack) {
            $n = strlen($s);
            for ($i = 0; $i < $n; $i++) {
                if ($s[$i] === '#') {
                    if (!$stack) {
                        continue;
                    }
                    array_pop($stack);
                } else {
                    array_push($stack, $s[$i]);
                }
            }
            return $stack;
        };
        [$p, $q] = [$helper($s, []), $helper($t, [])];

        return $p === $q;
    }
}

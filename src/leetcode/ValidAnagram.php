<?php

declare(strict_types=1);

namespace leetcode;

class ValidAnagram
{
    public static function isAnagram(string $s, string $t): bool
    {
        [$m, $n] = [strlen($s), strlen($t)];
        if ($m !== $n) {
            return false;
        }
        $source = $target = [];
        for ($i = 0; $i < $m; $i++) {
            $source[] = $s[$i];
        }
        for ($i = 0; $i < $n; $i++) {
            $target[] = $t[$i];
        }
        sort($source);
        sort($target);

        return $source === $target;
    }

    public static function isAnagram2(string $s, string $t): bool
    {
        [$m, $n] = [strlen($s), strlen($t)];
        if ($m !== $n) {
            return false;
        }
        $map = array_fill(0, 26, 0);
        for ($i = 0; $i < $m; $i++) {
            $key = ord($s[$i]) - ord('a');
            if (isset($map[$key])) {
                $map[$key]++;
            }
        }
        for ($i = 0; $i < $n; $i++) {
            $key = ord($t[$i]) - ord('a');
            if (isset($map[$key])) {
                $map[$key]--;
            }
            if ($map[$key] < 0) {
                return false;
            }
        }

        return true;
    }
}

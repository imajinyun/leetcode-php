<?php

declare(strict_types=1);

namespace leetcode;

class ContainsDuplicate
{
    public static function containsDuplicate(array $nums): bool
    {
        if (empty($nums)) {
            return false;
        }
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$i] === $nums[$j]) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function containsDuplicate2(array $nums): bool
    {
        if (empty($nums)) {
            return false;
        }
        sort($nums);
        for ($i = 1, $n = count($nums); $i < $n; $i++) {
            if ($nums[$i] === $nums[$i - 1]) {
                return true;
            }
        }

        return false;
    }

    public static function containsDuplicate3(array $nums): bool
    {
        if (empty($nums)) {
            return false;
        }
        $map = [];
        foreach ($nums as $key => $num) {
            if (isset($map[$num])) {
                return true;
            }
            $map[$num] = $key;
        }

        return false;
    }
}

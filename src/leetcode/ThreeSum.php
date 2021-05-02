<?php

declare(strict_types=1);

namespace leetcode;

class ThreeSum
{
    public static function threeSum(array $nums): array
    {
        [$ans, $n] = [[], count($nums)];
        if (empty($nums) || $n < 3) {
            return $ans;
        }

        $isSameArray = static function (array $needle, array $haystack = []) {
            sort($needle);
            foreach ($haystack as $value) {
                sort($value);
                if ($needle === $value) {
                    return true;
                }
            }

            return false;
        };

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                for ($k = $j + 1; $k < $n; $k++) {
                    if ($nums[$i] + $nums[$j] + $nums[$k] === 0) {
                        $needle = [$nums[$i], $nums[$j], $nums[$k]];
                        sort($needle);
                        if ($isSameArray($needle, $ans)) {
                            continue;
                        }
                        $ans[] = $needle;
                    }
                }
            }
        }

        return array_reverse($ans);
    }

    public static function threeSum2(array $nums): array
    {
        [$ans, $n] = [[], count($nums)];
        if (empty($nums) || $n < 3) {
            return $ans;
        }
        sort($nums);
        for ($i = 0; $i < $n - 2; $i++) {
            if ($i === 0 || ($i > 0 && $nums[$i] !== $nums[$i - 1])) {
                [$low, $high, $sum] = [$i + 1, $n - 1, -$nums[$i]];
                while ($low < $high) {
                    if ($nums[$low] + $nums[$high] === $sum) {
                        $ans[] = [$nums[$i], $nums[$low], $nums[$high]];
                        while ($low < $high && $nums[$low] === $nums[$low + 1]) {
                            $low++;
                        }
                        while ($low < $high && $nums[$high] === $nums[$high - 1]) {
                            $high--;
                        }
                        $low++;
                        $high--;
                    } elseif ($nums[$low] + $nums[$high] < $sum) {
                        $low++;
                    } else {
                        $high--;
                    }
                }
            }
        }

        return $ans;
    }

    public static function threeSum3(array $nums): array
    {
        [$ans, $n] = [[], count($nums)];
        if (empty($nums) || $n < 3) {
            return $ans;
        }

        sort($nums);
        for ($i = 0; $i < $n - 2; $i++) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            $low = $i + 1;
            $high = $n - 1;
            while ($low < $high) {
                $sum = $nums[$i] + $nums[$low] + $nums[$high];
                if ($sum > 0) {
                    $high--;
                } elseif ($sum < 0) {
                    $low++;
                } else {
                    $ans[] = [$nums[$i], $nums[$low], $nums[$high]];
                    while ($low < $high && $nums[$low] === $nums[$low + 1]) {
                        $low++;
                    }
                    while ($low < $high && $nums[$high] === $nums[$high - 1]) {
                        $high--;
                    }
                    $low++;
                    $high--;
                }
            }
        }

        return $ans;
    }
}

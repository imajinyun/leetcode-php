<?php

declare(strict_types=1);

namespace leetcode;

class FindNumbersWithEvenNumberOfDigits
{
    public static function findNumbers(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $cnt = 0;
        foreach ($nums as $num) {
            if (strlen((string) $num) % 2 === 0) {
                $cnt++;
            }
        }

        return $cnt;
    }

    public static function findNumbers2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $cnt = 0;
        foreach ($nums as $n) {
            $x = 0;
            while ($n > 0) {
                $n = (int) ($n / 10);
                $x++;
            }

            if ($x % 2 === 0) {
                $cnt++;
            }
        }

        return $cnt;
    }
}

<?php

declare(strict_types=1);

namespace leetcode;

class RemoveElement
{
    public static function removeElement(array &$nums, int $value): int
    {
        if (($n = count($nums)) === 0) {
            return 0;
        }

        $j = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] !== $value) {
                $nums[$j++] = $nums[$i];
            }
        }

        return $j;
    }
}

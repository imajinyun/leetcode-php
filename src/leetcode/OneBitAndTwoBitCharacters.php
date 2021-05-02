<?php

declare(strict_types=1);

namespace leetcode;

class OneBitAndTwoBitCharacters
{
    public static function isOneBitCharacter(array $bits): bool
    {
        if (empty($bits)) {
            return false;
        }
        $n = count($bits);

        return $n <= 2
            ? $bits[0] === 0
            : self::isOneBitCharacter(array_slice($bits, $bits[0] + 1, $n));
    }

    public static function isOneBitCharacter2(array $bits): bool
    {
        if (empty($bits)) {
    return false;
}
        [$i, $n] = [0, count($bits)];
        while ($i < $n - 1) {
            $i += $bits[$i] === 0 ? 1 : 2;
        }

        return $i === $n - 1;

    }
}

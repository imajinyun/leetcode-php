<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\OneBitAndTwoBitCharacters;
use PHPUnit\Framework\TestCase;

class OneBitAndTwoBitCharactersTest extends TestCase
{
    public function testIsOneBitCharacter(): void
    {
        self::assertTrue(OneBitAndTwoBitCharacters::isOneBitCharacter([1, 0, 0]));
        self::assertTrue(OneBitAndTwoBitCharacters::isOneBitCharacter([1, 1, 0]));
        self::assertFalse(OneBitAndTwoBitCharacters::isOneBitCharacter([0, 1, 0]));
        self::assertFalse(OneBitAndTwoBitCharacters::isOneBitCharacter([1, 1, 1, 0]));
    }

    public function testIsOneBitCharacter2(): void
    {
        self::assertTrue(OneBitAndTwoBitCharacters::isOneBitCharacter2([1, 0, 0]));
        self::assertTrue(OneBitAndTwoBitCharacters::isOneBitCharacter2([1, 1, 0]));
        self::assertFalse(OneBitAndTwoBitCharacters::isOneBitCharacter2([0, 1, 0]));
        self::assertFalse(OneBitAndTwoBitCharacters::isOneBitCharacter2([1, 1, 1, 0]));
    }
}

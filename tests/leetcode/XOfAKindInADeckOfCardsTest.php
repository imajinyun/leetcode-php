<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\XOfAKindInADeckOfCards;

class XOfAKindInADeckOfCardsTest extends TestCase
{
    public function testHasGroupsSizeX(): void
    {
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX([1, 2, 3, 4, 4, 3, 2, 1]));
        self::assertFalse(XOfAKindInADeckOfCards::hasGroupsSizeX([1, 1, 1, 2, 2, 2, 3, 3]));
        self::assertFalse(XOfAKindInADeckOfCards::hasGroupsSizeX([1]));
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX([1, 1]));
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX([1, 1, 2, 2, 2, 2]));
    }

    public function testHasGroupsSizeX2(): void
    {
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX2([1, 2, 3, 4, 4, 3, 2, 1]));
        self::assertFalse(XOfAKindInADeckOfCards::hasGroupsSizeX2([1, 1, 1, 2, 2, 2, 3, 3]));
        self::assertFalse(XOfAKindInADeckOfCards::hasGroupsSizeX2([1]));
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX2([1, 1]));
        self::assertTrue(XOfAKindInADeckOfCards::hasGroupsSizeX2([1, 1, 2, 2, 2, 2]));
    }
}

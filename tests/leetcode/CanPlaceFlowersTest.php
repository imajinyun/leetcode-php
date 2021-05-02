<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CanPlaceFlowers;

class CanPlaceFlowersTest extends TestCase
{
    public function testCanPlaceFlowers(): void
    {
        self::assertTrue(CanPlaceFlowers::canPlaceFlowers([1, 0, 0, 0, 1], 1));
        self::assertFalse(CanPlaceFlowers::canPlaceFlowers([1, 0, 0, 0, 1], 2));
        self::assertTrue(CanPlaceFlowers::canPlaceFlowers([1, 0, 1, 0, 1, 0, 1], 0));
    }

    public function testCanPlaceFlowers2(): void
    {
        self::assertTrue(CanPlaceFlowers::canPlaceFlowers2([1, 0, 0, 0, 1], 1));
        self::assertFalse(CanPlaceFlowers::canPlaceFlowers2([1, 0, 0, 0, 1], 2));
        self::assertTrue(CanPlaceFlowers::canPlaceFlowers2([1, 0, 1, 0, 1, 0, 1], 0));
    }
}

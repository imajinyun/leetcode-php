<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\DivisorGame;
use PHPUnit\Framework\TestCase;

class DivisorGameTest extends TestCase
{
    public function testDivisorGame(): void
    {
        self::assertFalse(DivisorGame::divisorGame(0));
        self::assertFalse(DivisorGame::divisorGame(1));
        self::assertTrue(DivisorGame::divisorGame(2));
        self::assertFalse(DivisorGame::divisorGame(3));
        self::assertTrue(DivisorGame::divisorGame(4));
        self::assertFalse(DivisorGame::divisorGame(5));
    }

    public function testDivisorGame2(): void
    {
        self::assertFalse(DivisorGame::divisorGame2(0));
        self::assertFalse(DivisorGame::divisorGame2(1));
        self::assertTrue(DivisorGame::divisorGame2(2));
        self::assertFalse(DivisorGame::divisorGame2(3));
        self::assertTrue(DivisorGame::divisorGame2(4));
        self::assertFalse(DivisorGame::divisorGame2(5));
    }
}

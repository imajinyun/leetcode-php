<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ValidPerfectSquare;

class ValidPerfectSquareTest extends TestCase
{
    public function testIsPerfectSquare(): void
    {
        self::assertTrue(ValidPerfectSquare::isPerfectSquare(16));
        self::assertFalse(ValidPerfectSquare::isPerfectSquare(14));
    }

    public function testIsPerfectSquare2(): void
    {
        self::assertTrue(ValidPerfectSquare::isPerfectSquare2(16));
        self::assertFalse(ValidPerfectSquare::isPerfectSquare2(14));
    }
}

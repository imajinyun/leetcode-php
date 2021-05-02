<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\AvailableCapturesForRook;
use PHPUnit\Framework\TestCase;

class AvailableCapturesForRookTest extends TestCase
{
    public function testNumRookCaptures(): void
    {
        self::assertSame(3, AvailableCapturesForRook::numRookCaptures([
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', 'p', '.', '.', '.', '.'],
            ['.', '.', '.', 'R', '.', '.', '.', 'p'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', 'p', '.', '.', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
        ]));

        self::assertSame(0, AvailableCapturesForRook::numRookCaptures([
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', 'p', 'p', 'p', 'p', 'p', '.', '.'],
            ['.', 'p', 'p', 'B', 'p', 'p', '.', '.'],
            ['.', 'p', 'B', 'R', 'B', 'p', '.', '.'],
            ['.', 'p', 'p', 'B', 'p', 'p', '.', '.'],
            ['.', 'p', 'p', 'p', 'p', 'p', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
        ]));

        self::assertSame(3, AvailableCapturesForRook::numRookCaptures([
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', 'p', '.', '.', '.', '.'],
            ['.', '.', '.', 'p', '.', '.', '.', '.'],
            ['p', 'p', '.', 'R', '.', 'p', 'B', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
            ['.', '.', '.', 'B', '.', '.', '.', '.'],
            ['.', '.', '.', 'p', '.', '.', '.', '.'],
            ['.', '.', '.', '.', '.', '.', '.', '.'],
        ]));
    }
}

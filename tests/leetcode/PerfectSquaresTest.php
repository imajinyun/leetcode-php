<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\PerfectSquares;
use PHPUnit\Framework\TestCase;

class PerfectSquaresTest extends TestCase
{
    public function testNumSquares(): void
    {
        self::assertSame(3, PerfectSquares::numSquares(12));
        self::assertSame(2, PerfectSquares::numSquares(13));
        self::assertSame(3, PerfectSquares::numSquares(14));
        self::assertSame(4, PerfectSquares::numSquares(15));
    }

    public function testNumSquares2(): void
    {
        self::assertSame(3, PerfectSquares::numSquares2(12));
        self::assertSame(2, PerfectSquares::numSquares2(13));
        self::assertSame(3, PerfectSquares::numSquares2(14));
        self::assertSame(4, PerfectSquares::numSquares2(15));
    }
}

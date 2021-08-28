<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FourSumII;
use PHPUnit\Framework\TestCase;

class FourSumIITest extends TestCase
{
    public function testFourSumCount(): void
    {
        self::assertSame(
            2,
            FourSumII::fourSumCount([1, 2], [-2, -1], [-1, 2], [0, 2])
        );
        self::assertSame(1, FourSumII::fourSumCount([0], [0], [0], [0]));
    }
}

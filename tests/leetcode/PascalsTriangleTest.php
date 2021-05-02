<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PascalsTriangle;

class PascalsTriangleTest extends TestCase
{
    public function testGenerate(): void
    {
        self::assertSame([
            [1], [1, 1], [1, 2, 1], [1, 3, 3, 1], [1, 4, 6, 4, 1]
        ], PascalsTriangle::generate(5));
        self::assertSame([[1]], PascalsTriangle::generate(1));
    }
}

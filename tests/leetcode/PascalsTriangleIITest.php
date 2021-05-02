<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PascalsTriangleII;

class PascalsTriangleIITest extends TestCase
{
    public function testGetRow(): void
    {
        self::assertSame([1, 3, 3, 1], PascalsTriangleII::getRow(3));
        self::assertSame([1], PascalsTriangleII::getRow(0));
        self::assertSame([1, 1], PascalsTriangleII::getRow(1));
    }
}

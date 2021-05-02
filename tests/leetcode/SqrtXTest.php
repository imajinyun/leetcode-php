<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SqrtX;

class SqrtXTest extends TestCase
{
    public function testSqrt(): void
    {
        self::assertSame(0, SqrtX::sqrt(-1));
        self::assertSame(0, SqrtX::sqrt(0));
        self::assertSame(1, SqrtX::sqrt(1));
        self::assertSame(2, SqrtX::sqrt(4));
        self::assertSame(2, SqrtX::sqrt(8));
        self::assertSame(3, SqrtX::sqrt(9));
        self::assertSame(3037000499, SqrtX::sqrt(PHP_INT_MAX));
        self::assertSame(0, SqrtX::sqrt(PHP_INT_MIN));
    }
}

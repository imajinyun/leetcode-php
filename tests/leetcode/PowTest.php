<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\Pow;
use PHPUnit\Framework\TestCase;

class PowTest extends TestCase
{
    public function testMyPow(): void
    {
        self::assertSame(1024.00000, Pow::myPow(2.00000, 10));
        self::assertSame(9.26100, Pow::myPow(2.10000, 3));
        self::assertSame(0.25000, Pow::myPow(2.00000, -2));
    }

    public function testMyPow2(): void
    {
        self::assertSame(1024.00000, Pow::myPow2(2.00000, 10));
        self::assertSame(9.26100, Pow::myPow2(2.10000, 3));
        self::assertSame(0.25000, Pow::myPow2(2.00000, -2));
    }
}

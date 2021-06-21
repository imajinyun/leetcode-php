<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CountPrimes;

class CountPrimesTest extends TestCase
{
    public function testCountPrimes(): void
    {
        self::assertSame(4, CountPrimes::countPrimes(10));
        self::assertSame(0, CountPrimes::countPrimes(0));
        self::assertSame(0, CountPrimes::countPrimes(1));
    }

    public function testCountPrimes2(): void
    {
        self::assertSame(4, CountPrimes::countPrimes2(10));
        self::assertSame(0, CountPrimes::countPrimes2(0));
        self::assertSame(0, CountPrimes::countPrimes2(1));
    }
}

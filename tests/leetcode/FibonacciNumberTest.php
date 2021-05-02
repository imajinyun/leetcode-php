<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FibonacciNumber;

class FibonacciNumberTest extends TestCase
{
    public function testFib(): void
    {
        self::assertSame(0, FibonacciNumber::fib(0));
        self::assertSame(1, FibonacciNumber::fib(1));
        self::assertSame(1, FibonacciNumber::fib(2));
        self::assertSame(2, FibonacciNumber::fib(3));
        self::assertSame(3, FibonacciNumber::fib(4));
        self::assertSame(5, FibonacciNumber::fib(5));
        self::assertSame(8, FibonacciNumber::fib(6));
        self::assertSame(13, FibonacciNumber::fib(7));
        self::assertSame(21, FibonacciNumber::fib(8));
    }

    public function testFib2(): void
    {
        self::assertSame(0, FibonacciNumber::fib2(0));
        self::assertSame(1, FibonacciNumber::fib2(1));
        self::assertSame(1, FibonacciNumber::fib2(2));
        self::assertSame(2, FibonacciNumber::fib2(3));
        self::assertSame(3, FibonacciNumber::fib2(4));
        self::assertSame(5, FibonacciNumber::fib2(5));
        self::assertSame(8, FibonacciNumber::fib2(6));
        self::assertSame(13, FibonacciNumber::fib2(7));
        self::assertSame(21, FibonacciNumber::fib2(8));
    }

    public function testFib3(): void
    {
        self::assertSame(0, FibonacciNumber::fib3(0));
        self::assertSame(1, FibonacciNumber::fib3(1));
        self::assertSame(1, FibonacciNumber::fib3(2));
        self::assertSame(2, FibonacciNumber::fib3(3));
        self::assertSame(3, FibonacciNumber::fib3(4));
        self::assertSame(5, FibonacciNumber::fib3(5));
        self::assertSame(8, FibonacciNumber::fib3(6));
        self::assertSame(13, FibonacciNumber::fib3(7));
        self::assertSame(21, FibonacciNumber::fib3(8));
    }
}

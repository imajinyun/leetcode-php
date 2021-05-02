<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\AddToArrayFormOfInteger;
use PHPUnit\Framework\TestCase;

class AddToArrayFormOfIntegerTest extends TestCase
{
    public function testAddToArrayForm(): void
    {
        self::assertSame(
            [1, 2, 3, 4],
            AddToArrayFormOfInteger::addToArrayForm([1, 2, 0, 0], 34)
        );
        self::assertSame(
            [4, 5, 5],
            AddToArrayFormOfInteger::addToArrayForm([2, 7, 4], 181)
        );
        self::assertSame(
            [1, 0, 2, 1],
            AddToArrayFormOfInteger::addToArrayForm([2, 1, 5], 806)
        );
        self::assertSame(
            [1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            AddToArrayFormOfInteger::addToArrayForm([9, 9, 9, 9, 9, 9, 9, 9, 9], 1)
        );
    }

    public function testAddToArrayForm2(): void
    {
        self::assertSame(
            [1, 2, 3, 4],
            AddToArrayFormOfInteger::addToArrayForm2([1, 2, 0, 0], 34)
        );
        self::assertSame(
            [4, 5, 5],
            AddToArrayFormOfInteger::addToArrayForm2([2, 7, 4], 181)
        );
        self::assertSame(
            [1, 0, 2, 1],
            AddToArrayFormOfInteger::addToArrayForm2([2, 1, 5], 806)
        );
        self::assertSame(
            [1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            AddToArrayFormOfInteger::addToArrayForm2([9, 9, 9, 9, 9, 9, 9, 9, 9], 1)
        );
    }

    public function testAddToArrayForm3(): void
    {
        self::assertSame(
            [1, 2, 3, 4],
            AddToArrayFormOfInteger::addToArrayForm3([1, 2, 0, 0], 34)
        );
        self::assertSame(
            [4, 5, 5],
            AddToArrayFormOfInteger::addToArrayForm3([2, 7, 4], 181)
        );
        self::assertSame(
            [1, 0, 2, 1],
            AddToArrayFormOfInteger::addToArrayForm3([2, 1, 5], 806)
        );
        self::assertSame(
            [1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            AddToArrayFormOfInteger::addToArrayForm3([9, 9, 9, 9, 9, 9, 9, 9, 9], 1)
        );
    }
}

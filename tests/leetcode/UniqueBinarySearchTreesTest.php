<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\UniqueBinarySearchTrees;
use PHPUnit\Framework\TestCase;

class UniqueBinarySearchTreesTest extends TestCase
{
    public function testNumTrees(): void
    {
        self::assertSame(5, UniqueBinarySearchTrees::numTrees(3));
        self::assertSame(14, UniqueBinarySearchTrees::numTrees(4));
    }

    public function testNumTrees2(): void
    {
        self::assertSame(5, UniqueBinarySearchTrees::numTrees2(3));
        self::assertSame(14, UniqueBinarySearchTrees::numTrees2(4));
    }
}

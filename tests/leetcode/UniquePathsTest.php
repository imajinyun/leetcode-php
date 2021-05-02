<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\UniquePaths;
use PHPUnit\Framework\TestCase;

class UniquePathsTest extends TestCase
{
    public function testUniquePaths(): void
    {
        self::assertEquals(3, UniquePaths::uniquePaths(3, 2));
        self::assertEquals(28, UniquePaths::uniquePaths(7, 3));
    }

    public function testUniquePaths2(): void
    {
        self::assertEquals(3, UniquePaths::uniquePaths2(3, 2));
        self::assertEquals(28, UniquePaths::uniquePaths2(7, 3));
    }

    public function testUniquePaths3(): void
    {
        self::assertEquals(3, UniquePaths::uniquePaths3(3, 2));
        self::assertEquals(28, UniquePaths::uniquePaths3(7, 3));
    }
}

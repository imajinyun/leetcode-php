<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\HeightChecker;

class HeightCheckerTest extends TestCase
{
    public function testHeightChecker(): void
    {
        self::assertSame(3, HeightChecker::heightChecker([1, 1, 4, 2, 1, 3]));
        self::assertSame(5, HeightChecker::heightChecker([5, 1, 2, 3, 4]));
        self::assertSame(0, HeightChecker::heightChecker([1, 2, 3, 4, 5]));
    }
}

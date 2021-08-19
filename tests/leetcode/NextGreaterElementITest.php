<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\NextGreaterElementI;
use PHPUnit\Framework\TestCase;

class NextGreaterElementITest extends TestCase
{
    public function testNextGreaterElement(): void
    {
        self::assertSame(
            [-1, 3, -1],
            NextGreaterElementI::nextGreaterElement([4, 1, 2], [1, 3, 4, 2])
        );
        self::assertSame(
            [3, -1],
            NextGreaterElementI::nextGreaterElement([2, 4], [1, 2, 3, 4])
        );
    }
}

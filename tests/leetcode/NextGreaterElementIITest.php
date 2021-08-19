<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\NextGreaterElementII;
use PHPUnit\Framework\TestCase;

class NextGreaterElementIITest extends TestCase
{
    public function testNextGreaterElements(): void
    {
        self::assertSame(
            [2, -1, 2],
            NextGreaterElementII::nextGreaterElements([1, 2, 1])
        );
        self::assertSame(
            [2, 3, 4, -1, 4],
            NextGreaterElementII::nextGreaterElements([1, 2, 3, 4, 3])
        );
    }

    public function testNextGreaterElements2(): void
    {
        self::assertSame(
            [2, -1, 2],
            NextGreaterElementII::nextGreaterElements2([1, 2, 1])
        );
        self::assertSame(
            [2, 3, 4, -1, 4],
            NextGreaterElementII::nextGreaterElements2([1, 2, 3, 4, 3])
        );
    }
}

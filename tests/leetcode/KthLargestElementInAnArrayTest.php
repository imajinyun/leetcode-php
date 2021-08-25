<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\KthLargestElementInAnArray;

class KthLargestElementInAnArrayTest extends TestCase
{
    public function testFindKthLargest(): void
    {
        self::assertSame(
            5,
            KthLargestElementInAnArray::findKthLargest([3, 2, 1, 5, 6, 4], 2)
        );
        self::assertSame(
            4,
            KthLargestElementInAnArray::findKthLargest([3, 2, 3, 1, 2, 4, 5, 5, 6], 4)
        );
    }

    public function testFindKthLargest2(): void
    {
        self::assertSame(
            5,
            KthLargestElementInAnArray::findKthLargest2([3, 2, 1, 5, 6, 4], 2)
        );
        self::assertSame(
            4,
            KthLargestElementInAnArray::findKthLargest2([3, 2, 3, 1, 2, 4, 5, 5, 6], 4)
        );
    }
}

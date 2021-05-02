<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\KthLargestElementInAStream;

class KthLargestElementInAStreamTest extends TestCase
{
    public function testKthLargest(): void
    {
        $kthLargest = new KthLargestElementInAStream(3, [4, 5, 8, 2]);
        $actual = [
            $kthLargest->add(3),
            $kthLargest->add(5),
            $kthLargest->add(10),
            $kthLargest->add(9),
            $kthLargest->add(4),
        ];
        self::assertSame([4, 5, 5, 8, 8], $actual);
    }
}

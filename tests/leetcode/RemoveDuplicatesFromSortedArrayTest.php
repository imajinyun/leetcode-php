<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RemoveDuplicatesFromSortedArray;

class RemoveDuplicatesFromSortedArrayTest extends TestCase
{
    public function testRemoveDuplicates(): void
    {
        $a = [1, 1, 2];
        self::assertSame(2, RemoveDuplicatesFromSortedArray::removeDuplicates($a));

        $b = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        self::assertSame(5, RemoveDuplicatesFromSortedArray::removeDuplicates($b));
    }

    public function testRemoveDuplicates2(): void
    {
        $a = [1, 1, 2];
        self::assertSame(2, RemoveDuplicatesFromSortedArray::removeDuplicates2($a));

        $b = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        self::assertSame(5, RemoveDuplicatesFromSortedArray::removeDuplicates2($b));
    }
}

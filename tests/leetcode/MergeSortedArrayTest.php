<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MergeSortedArray;

class MergeSortedArrayTest extends TestCase
{
    public function testMerge(): void
    {
        [$a, $b] = [[1, 2, 3, 0, 0, 0], [2, 5, 6]];
        MergeSortedArray::merge($a, 3, $b, 3);
        self::assertSame([1, 2, 2, 3, 5, 6], $a);

        [$c, $d] = [[1], []];
        MergeSortedArray::merge($c, 1, $d, 0);
        self::assertSame([1], $c);
    }

    public function testMerge2(): void
    {
        [$a, $b] = [[1, 2, 3, 0, 0, 0], [2, 5, 6]];
        MergeSortedArray::merge2($a, 3, $b, 3);
        self::assertSame([1, 2, 2, 3, 5, 6], $a);

        [$c, $d] = [[1], []];
        MergeSortedArray::merge2($c, 1, $d, 0);
        self::assertSame([1], $c);
    }
}

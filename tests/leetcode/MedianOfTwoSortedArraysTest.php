<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MedianOfTwoSortedArrays;

class MedianOfTwoSortedArraysTest extends TestCase
{
    public function testFindMedianSortedArrays(): void
    {
        [$a, $b] = [[1, 3], [2]];
        self::assertEquals(2.0, MedianOfTwoSortedArrays::findMedianSortedArrays($a, $b));

        [$c, $d] = [[1, 2], [3, 4]];
        self::assertEquals(2.5, MedianOfTwoSortedArrays::findMedianSortedArrays($c, $d));

        [$e, $f] = [[0, 0], [0, 0]];
        self::assertSame(0.00000, MedianOfTwoSortedArrays::findMedianSortedArrays($e, $f));

        [$g, $h] = [[], [1]];
        self::assertSame(1.00000, MedianOfTwoSortedArrays::findMedianSortedArrays($g, $h));

        [$i, $j] = [[2], []];
        self::assertSame(2.0000, MedianOfTwoSortedArrays::findMedianSortedArrays($i, $j));
    }

    public function testFindMedianSortedArrays2(): void
    {
        [$a, $b] = [[1, 3], [2]];
        self::assertEquals(2.0, MedianOfTwoSortedArrays::findMedianSortedArrays($a, $b));

        [$c, $d] = [[1, 2], [3, 4]];
        self::assertEquals(2.5, MedianOfTwoSortedArrays::findMedianSortedArrays($c, $d));

        [$e, $f] = [[0, 0], [0, 0]];
        self::assertSame(0.00000, MedianOfTwoSortedArrays::findMedianSortedArrays($e, $f));

        [$g, $h] = [[], [1]];
        self::assertSame(1.00000, MedianOfTwoSortedArrays::findMedianSortedArrays($g, $h));

        [$i, $j] = [[2], []];
        self::assertSame(2.0000, MedianOfTwoSortedArrays::findMedianSortedArrays($i, $j));
    }
}

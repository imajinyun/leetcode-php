<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RelativeSortArray;

class RelativeSortArrayTest extends TestCase
{
    public function testRelativeSortArray(): void
    {
        $a = [2, 3, 1, 3, 2, 4, 6, 7, 9, 2, 19];
        $b = [2, 1, 4, 3, 9, 6];
        self::assertSame(
            [2, 2, 2, 1, 4, 3, 3, 9, 6, 7, 19],
            RelativeSortArray::relativeSortArray($a, $b)
        );
    }
}

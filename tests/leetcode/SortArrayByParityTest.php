<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SortArrayByParity;
use PHPUnit\Framework\TestCase;

class SortArrayByParityTest extends TestCase
{
    public function testSortArrayByParity(): void
    {
        self::assertSame([2, 4, 3, 1], SortArrayByParity::sortArrayByParity([3, 1, 2, 4]));
        self::assertSame([6, 8, 7, 5], SortArrayByParity::sortArrayByParity([5, 6, 7, 8]));
        self::assertSame([6, 2, 3, 1], SortArrayByParity::sortArrayByParity([6, 1, 3, 2]));
    }

    public function testSortArrayByParity2(): void
    {
        self::assertSame([2, 4, 1, 3], SortArrayByParity::sortArrayByParity2([3, 1, 2, 4]));
        self::assertSame([6, 8, 7, 5], SortArrayByParity::sortArrayByParity([5, 6, 7, 8]));
        self::assertSame([6, 2, 3, 1], SortArrayByParity::sortArrayByParity2([6, 1, 3, 2]));
    }
}

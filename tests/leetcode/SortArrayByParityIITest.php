<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SortArrayByParityII;

class SortArrayByParityIITest extends TestCase
{
    public function testSortArrayByParityII(): void
    {
        self::assertSame([4, 5, 2, 7], SortArrayByParityII::sortArrayByParityII([4, 2, 5, 7]));
        self::assertSame([2, 3], SortArrayByParityII::sortArrayByParityII([2, 3]));
    }

    public function testSortArrayByParityII2(): void
    {
        self::assertSame([4, 5, 2, 7], SortArrayByParityII::sortArrayByParityII2([4, 2, 5, 7]));
        self::assertSame([2, 3], SortArrayByParityII::sortArrayByParityII2([2, 3]));
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindAllNumbersDisappearedInAnArray;

class FindAllNumbersDisappearedInAnArrayTest extends TestCase
{
    public function testFindDisappearedNumbers(): void
    {
        self::assertSame(
            [5, 6],
            FindAllNumbersDisappearedInAnArray::findDisappearedNumbers([4, 3, 2, 7, 8, 2, 3, 1])
        );
    }

    public function testFindDisappearedNumbers2(): void
    {
        self::assertSame(
            [5, 6],
            FindAllNumbersDisappearedInAnArray::findDisappearedNumbers2([4, 3, 2, 7, 8, 2, 3, 1])
        );
    }
}

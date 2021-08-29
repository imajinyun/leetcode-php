<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FindTheDuplicateNumber;
use PHPUnit\Framework\TestCase;

class FindTheDuplicateNumberTest extends TestCase
{
    public function testFindDuplicate(): void
    {
        self::assertSame(2, FindTheDuplicateNumber::findDuplicate([1, 3, 4, 2, 2]));
        self::assertSame(3, FindTheDuplicateNumber::findDuplicate([3, 1, 3, 4, 2]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate([1, 1]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate([1, 1, 2]));
    }

    public function testFindDuplicate2(): void
    {
        self::assertSame(2, FindTheDuplicateNumber::findDuplicate2([1, 3, 4, 2, 2]));
        self::assertSame(3, FindTheDuplicateNumber::findDuplicate2([3, 1, 3, 4, 2]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate2([1, 1]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate2([1, 1, 2]));
    }

    public function testFindDuplicate3(): void
    {
        self::assertSame(2, FindTheDuplicateNumber::findDuplicate3([1, 3, 4, 2, 2]));
        self::assertSame(3, FindTheDuplicateNumber::findDuplicate3([3, 1, 3, 4, 2]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate3([1, 1]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate3([1, 1, 2]));
    }

    public function testFindDuplicate4(): void
    {
        self::assertSame(2, FindTheDuplicateNumber::findDuplicate4([1, 3, 4, 2, 2]));
        self::assertSame(3, FindTheDuplicateNumber::findDuplicate4([3, 1, 3, 4, 2]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate4([1, 1]));
        self::assertSame(1, FindTheDuplicateNumber::findDuplicate4([1, 1, 2]));
    }
}

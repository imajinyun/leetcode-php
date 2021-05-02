<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ContainsDuplicate;
use PHPUnit\Framework\TestCase;

class ContainsDuplicateTest extends TestCase
{
    public function testContainsDuplicate(): void
    {
        self::assertTrue(ContainsDuplicate::containsDuplicate([1, 2, 3, 1]));
        self::assertFalse(ContainsDuplicate::containsDuplicate([1, 2, 3, 4]));
        self::assertTrue(ContainsDuplicate::containsDuplicate([1, 1, 1, 3, 3, 4, 3, 2, 4, 2]));
    }

    public function testContainsDuplicate2(): void
    {
        self::assertTrue(ContainsDuplicate::containsDuplicate2([1, 2, 3, 1]));
        self::assertFalse(ContainsDuplicate::containsDuplicate2([1, 2, 3, 4]));
        self::assertTrue(ContainsDuplicate::containsDuplicate2([1, 1, 1, 3, 3, 4, 3, 2, 4, 2]));
    }

    public function testContainsDuplicate3(): void
    {
        self::assertTrue(ContainsDuplicate::containsDuplicate3([1, 2, 3, 1]));
        self::assertFalse(ContainsDuplicate::containsDuplicate3([1, 2, 3, 4]));
        self::assertTrue(ContainsDuplicate::containsDuplicate3([1, 1, 1, 3, 3, 4, 3, 2, 4, 2]));
    }
}

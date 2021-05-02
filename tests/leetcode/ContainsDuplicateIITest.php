<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ContainsDuplicateII;
use PHPUnit\Framework\TestCase;

class ContainsDuplicateIITest extends TestCase
{
    public function testContainsNearbyDuplicate(): void
    {
        self::assertTrue(ContainsDuplicateII::containsNearbyDuplicate([1, 2, 3, 1], 3));
        self::assertTrue(ContainsDuplicateII::containsNearbyDuplicate([1, 0, 1, 1], 1));
        self::assertFalse(ContainsDuplicateII::containsNearbyDuplicate([1, 2, 3, 1, 2, 3], 2));
    }
}

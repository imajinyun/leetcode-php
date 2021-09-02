<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FirstUniqueCharacterInAString;

class FirstUniqueCharacterInAStringTest extends TestCase
{
    public function testFirstUniqChar(): void
    {
        self::assertSame(0, FirstUniqueCharacterInAString::firstUniqChar('leetcode'));
        self::assertSame(2, FirstUniqueCharacterInAString::firstUniqChar('loveleetcode'));
        self::assertSame(-1, FirstUniqueCharacterInAString::firstUniqChar('aabb'));
    }
}

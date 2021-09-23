<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ReverseStringII;
use PHPUnit\Framework\TestCase;

class ReverseStringIITest extends TestCase
{
    public function testReverseStr(): void
    {
        self::assertSame('bacdfeg', ReverseStringII::reverseStr('abcdefg', 2));
        self::assertSame('bacd', ReverseStringII::reverseStr('abcd', 2));
    }

    public function testReverseStr2(): void
    {
        self::assertSame('bacdfeg', ReverseStringII::reverseStr2('abcdefg', 2));
        self::assertSame('bacd', ReverseStringII::reverseStr2('abcd', 2));
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ReverseString;

class ReverseStringTest extends TestCase
{
    public function testReverseString(): void
    {
        $s1 = 'hello';
        ReverseString::reverseString($s1);
        self::assertSame('olleh', $s1);

        $s2 = 'Hannah';
        ReverseString::reverseString($s2);
        self::assertSame('hannaH', $s2);
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BackspaceStringCompare;

class BackspaceStringCompareTest extends TestCase
{
    public function testBackspaceCompare(): void
    {
        self::assertTrue(BackspaceStringCompare::backspaceCompare('ab#c', 'ad#c'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare('ab##', 'c#d#'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare('a##c', '#a#c'));
        self::assertFalse(BackspaceStringCompare::backspaceCompare('a#c', 'b'));
    }

    public function testBackspaceCompare2(): void
    {
        self::assertTrue(BackspaceStringCompare::backspaceCompare2('ab#c', 'ad#c'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare2('ab##', 'c#d#'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare2('a##c', '#a#c'));
        self::assertFalse(BackspaceStringCompare::backspaceCompare2('a#c', 'b'));
    }

    public function testBackspaceCompare3(): void
    {
        self::assertTrue(BackspaceStringCompare::backspaceCompare3('ab#c', 'ad#c'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare3('ab##', 'c#d#'));
        self::assertTrue(BackspaceStringCompare::backspaceCompare3('a##c', '#a#c'));
        self::assertFalse(BackspaceStringCompare::backspaceCompare3('a#c', 'b'));
    }
}

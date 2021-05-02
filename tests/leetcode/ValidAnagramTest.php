<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ValidAnagram;
use PHPUnit\Framework\TestCase;

class ValidAnagramTest extends TestCase
{
    public function testIsAnagram(): void
    {
        $actual = ValidAnagram::isAnagram('anagram', 'nagaram');
        self::assertIsBool($actual);
        self::assertTrue($actual);

        $actual = ValidAnagram::isAnagram('rat', 'car');
        self::assertIsBool($actual);
        self::assertFalse($actual);
    }

    public function testIsAnagram2(): void
    {
        $actual = ValidAnagram::isAnagram2('anagram', 'nagaram');
        self::assertIsBool($actual);
        self::assertTrue($actual);

        $actual = ValidAnagram::isAnagram2('rat', 'car');
        self::assertIsBool($actual);
        self::assertFalse($actual);
    }
}

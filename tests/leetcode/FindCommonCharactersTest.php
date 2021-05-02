<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindCommonCharacters;

class FindCommonCharactersTest extends TestCase
{
    public function testCommonChars(): void
    {
        self::assertSame(
            ['e', 'l', 'l'],
            FindCommonCharacters::commonChars(['bella', 'label', 'roller'])
        );
        self::assertSame(
            ['c', 'o'],
            FindCommonCharacters::commonChars(['cool', 'lock', 'cook'])
        );
    }
}

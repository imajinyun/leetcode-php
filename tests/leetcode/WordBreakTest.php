<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\WordBreak;
use PHPUnit\Framework\TestCase;

class WordBreakTest extends TestCase
{
    public function testWordBreak(): void
    {
        self::assertTrue(WordBreak::wordBreak('aa', ['a', 'aa']));
        self::assertTrue(WordBreak::wordBreak('leetcode', ['leet', 'code']));
        self::assertTrue(WordBreak::wordBreak('applepenapple', ['apple', 'pen']));
        self::assertFalse(WordBreak::wordBreak('catsandog', ['cats', 'dog', 'sand', 'and', 'cat']));
        self::assertFalse(WordBreak::wordBreak(
            'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab',
            ['a', 'aa', 'aaa', 'aaaa', 'aaaaa', 'aaaaaa', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa']
        ));
    }

    public function testWordBreak2(): void
    {
        self::assertTrue(WordBreak::wordBreak2('aa', ['a', 'aa']));
        self::assertTrue(WordBreak::wordBreak2('leetcode', ['leet', 'code']));
        self::assertTrue(WordBreak::wordBreak2('applepenapple', ['apple', 'pen']));
        self::assertFalse(WordBreak::wordBreak2('catsandog', ['cats', 'dog', 'sand', 'and', 'cat']));
        self::assertFalse(WordBreak::wordBreak2(
            'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab',
            ['a', 'aa', 'aaa', 'aaaa', 'aaaaa', 'aaaaaa', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa']
        ));
    }

    public function testWordBreak3(): void
    {
        self::assertTrue(WordBreak::wordBreak3('aa', ['a', 'aa']));
        self::assertTrue(WordBreak::wordBreak3('leetcode', ['leet', 'code']));
        self::assertTrue(WordBreak::wordBreak3('applepenapple', ['apple', 'pen']));
        self::assertFalse(WordBreak::wordBreak3('catsandog', ['cats', 'dog', 'sand', 'and', 'cat']));
        self::assertFalse(WordBreak::wordBreak3(
            'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab',
            ['a', 'aa', 'aaa', 'aaaa', 'aaaaa', 'aaaaaa', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa']
        ));
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\WordSearchII;
use PHPUnit\Framework\TestCase;

class WordSearchIITest extends TestCase
{
    protected $board;

    protected function setUp(): void
    {
        $this->board = [
            ['o', 'a', 'a', 'n'],
            ['e', 't', 'a', 'e'],
            ['i', 'h', 'k', 'r'],
            ['i', 'f', 'l', 'v'],
        ];
        parent::setUp();
    }

    public function testFindWords(): void
    {
        $words = ['oath', 'pea', 'eat', 'rain'];
        self::assertSame(['oath', 'eat'], WordSearchII::findWords($this->board, $words));
    }
}

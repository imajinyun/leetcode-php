<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\WordSearch;

class WordSearchTest extends TestCase
{
    private $board;

    protected function setUp(): void
    {
        $this->board = [
            ['A', 'B', 'C', 'E'],
            ['S', 'F', 'C', 'S'],
            ['A', 'D', 'E', 'E'],
        ];
    }

    public function testExist(): void
    {
        self::assertTrue(WordSearch::exist($this->board, 'ABCCED'));
        self::assertTrue(WordSearch::exist($this->board, 'SEE'));
        self::assertTrue(WordSearch::exist($this->board, 'ABCB'));
    }
}

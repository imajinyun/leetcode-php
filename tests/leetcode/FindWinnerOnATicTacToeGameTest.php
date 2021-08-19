<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindWinnerOnATicTacToeGame;

class FindWinnerOnATicTacToeGameTest extends TestCase
{
    private array $items = [];

    protected function setUp(): void
    {
        $this->items = [
            'A' => [[0, 0], [2, 0], [1, 1], [2, 1], [2, 2]],
            'B' => [[0, 0], [1, 1], [0, 1], [0, 2], [1, 0], [2, 0]],
            'Draw' => [[0, 0], [1, 1], [2, 0], [1, 0], [1, 2], [2, 1], [0, 1], [0, 2], [2, 2]],
            'Pending' => [[0, 0], [1, 1]],
        ];
    }

    public function testTictactoe(): void
    {
        foreach ($this->items as $key => $item) {
            self::assertSame($key, FindWinnerOnATicTacToeGame::tictactoe($item));
        }
    }

    public function testTictactoe2(): void
    {
        foreach ($this->items as $key => $item) {
            self::assertSame($key, FindWinnerOnATicTacToeGame::tictactoe2($item));
        }
    }
}

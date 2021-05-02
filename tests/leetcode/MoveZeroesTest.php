<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MoveZeroes;
use PHPUnit\Framework\TestCase;

class MoveZeroesTest extends TestCase
{
    public function testMoveZeroes(): void
    {
        $num1 = [0, 1, 0, 3, 12];
        MoveZeroes::moveZeroes($num1);
        self::assertSame([1, 3, 12, 0, 0], $num1);

        $num2 = [0];
        MoveZeroes::moveZeroes($num2);
        self::assertSame([0], $num2);
    }
}

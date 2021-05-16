<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\HighFive;
use PHPUnit\Framework\TestCase;

class HighFiveTest extends TestCase
{
    public function testHighFive(): void
    {
        $items1 = [
            [1, 91], [1, 92], [2, 93], [2, 97], [1, 60], [2, 77], [1, 65], [1, 87], [1, 100], [2, 100], [2, 76]
        ];
        self::assertSame([[1, 87], [2, 88]], HighFive::highFive($items1));

        $items2 = [
            [1, 100], [7, 100], [1, 100], [7, 100], [1, 100], [7, 100], [1, 100], [7, 100], [1, 100], [7, 100]
        ];
        self::assertSame([[1, 100], [7, 100]], HighFive::highFive($items2));
    }
}

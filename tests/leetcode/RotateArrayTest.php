<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RotateArray;

class RotateArrayTest extends TestCase
{
    public function testRotate(): void
    {
        $num1 = [1, 2, 3, 4, 5, 6, 7];
        RotateArray::rotate($num1, 3);
        self::assertSame([5, 6, 7, 1, 2, 3, 4], $num1);

        $num2 = [-1, -100, 3, 99];
        RotateArray::rotate($num2, 2);
        self::assertSame([3, 99, -1, -100], $num2);
    }

    public function testRotate2(): void
    {
        $num1 = [1, 2, 3, 4, 5, 6, 7];
        RotateArray::rotate2($num1, 3);
        self::assertSame([5, 6, 7, 1, 2, 3, 4], $num1);

        $num2 = [-1, -100, 3, 99];
        RotateArray::rotate2($num2, 2);
        self::assertSame([3, 99, -1, -100], $num2);
    }

    public function testRotate3(): void
    {
        $num1 = [1, 2, 3, 4, 5, 6, 7];
        RotateArray::rotate3($num1, 3);
        self::assertSame([5, 6, 7, 1, 2, 3, 4], $num1);

        $num2 = [-1, -100, 3, 99];
        RotateArray::rotate3($num2, 2);
        self::assertSame([3, 99, -1, -100], $num2);
    }
}

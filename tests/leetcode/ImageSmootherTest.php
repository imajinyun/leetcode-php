<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ImageSmoother;

class ImageSmootherTest extends TestCase
{
    public function testImageSmoother(): void
    {
        self::assertSame(
            [[0, 0, 0], [0, 0, 0], [0, 0, 0]],
            ImageSmoother::imageSmoother([[1, 1, 1], [1, 0, 1], [1, 1, 1]])
        );
        self::assertSame(
            [[0, 0, 0], [0, 0, 0], [0, 0, 0]],
            ImageSmoother::imageSmoother([[1, 1, 1], [1, 0, 1], [1, 1, 1]])
        );
        self::assertSame(
            [[4, 4, 5], [5, 6, 6], [8, 9, 9], [11, 12, 12], [13, 13, 14]],
            ImageSmoother::imageSmoother([[2, 3, 4], [5, 6, 7], [8, 9, 10], [11, 12, 13], [14, 15, 16]])
        );
        self::assertSame(
            [[3, 6, 8], [3, 6, 8]],
            ImageSmoother::imageSmoother([[1, 3, 2], [6, 2, 25]])
        );
    }

    public function testImageSmoother2(): void
    {
        self::assertSame(
            [[0, 0, 0], [0, 0, 0], [0, 0, 0]],
            ImageSmoother::imageSmoother2([[1, 1, 1], [1, 0, 1], [1, 1, 1]])
        );
        self::assertSame(
            [[0, 0, 0], [0, 0, 0], [0, 0, 0]],
            ImageSmoother::imageSmoother2([[1, 1, 1], [1, 0, 1], [1, 1, 1]])
        );
        self::assertSame(
            [[4, 4, 5], [5, 6, 6], [8, 9, 9], [11, 12, 12], [13, 13, 14]],
            ImageSmoother::imageSmoother2([[2, 3, 4], [5, 6, 7], [8, 9, 10], [11, 12, 13], [14, 15, 16]])
        );
        self::assertSame(
            [[3, 6, 8], [3, 6, 8]],
            ImageSmoother::imageSmoother2([[1, 3, 2], [6, 2, 25]])
        );
    }
}

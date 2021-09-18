<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinarySearch;

class BinarySearchTest extends TestCase
{
    private array $items = [
        [[-1, 0, 3, 5, 9, 12], 9, 4],
        [[-1, 0, 3, 5, 9, 12], 2, -1],
    ];

    public function testSearch(): void
    {
        foreach ($this->items as $item) {
            $data = $item[0];
            self::assertSame($item[2], BinarySearch::search($data, $item[1]));
        }
    }

    public function testSearch2(): void
    {
        foreach ($this->items as $item) {
            $data = $item[0];
            self::assertSame($item[2], BinarySearch::search2($data, $item[1]));
        }
    }
}

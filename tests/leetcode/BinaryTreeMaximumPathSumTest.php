<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BinaryTreeMaximumPathSum;
use leetcode\util\TreeNode;
use PHPUnit\Framework\TestCase;

class BinaryTreeMaximumPathSumTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $this->items = [
            [new TreeNode(1, new TreeNode(2), new TreeNode(3)), 6],
            [
                new TreeNode(
                    -10,
                    new TreeNode(9),
                    new TreeNode(
                        20,
                        new TreeNode(15),
                        new TreeNode(7)
                    )
                ),
                42
            ],
            [new TreeNode(-2, new TreeNode(-1)), -1],
            [new TreeNode(1, new TreeNode(2)), 3]
        ];
    }

    public function testMaxPathSum(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], BinaryTreeMaximumPathSum::maxPathSum($item[0]));
        }
    }

    public function testMaxPathSum2(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], BinaryTreeMaximumPathSum::maxPathSum2($item[0]));
        }
    }
}

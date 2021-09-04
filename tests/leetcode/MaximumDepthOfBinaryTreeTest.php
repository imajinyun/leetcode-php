<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MaximumDepthOfBinaryTree;
use leetcode\util\TreeNode;
use PHPUnit\Framework\TestCase;

class MaximumDepthOfBinaryTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        parent::setUp();

        $this->items = [
            [new TreeNode(3, new TreeNode(9), new TreeNode(20, new TreeNode(15), new TreeNode(7))), 3],
            [new TreeNode(1, null, new TreeNode(2)), 2],
            [null, 0],
            [new TreeNode(0), 1],
        ];
    }

    public function testMaxDepth(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], MaximumDepthOfBinaryTree::maxDepth($item[0]));
        }
    }

    public function testMaxDepth2(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], MaximumDepthOfBinaryTree::maxDepth2($item[0]));
        }
    }
}

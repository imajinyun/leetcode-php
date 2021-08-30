<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\InvertBinaryTree;
use leetcode\util\TreeNode;

class InvertBinaryTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $node1 = new TreeNode(4,
            new TreeNode(2,
                new TreeNode(1),
                new TreeNode(3)
            ),
            new TreeNode(7,
                new TreeNode(6),
                new TreeNode(9)
            )
        );
        $node2 = new TreeNode(2, new TreeNode(1), new TreeNode(3));
        $node3 = null;

        $this->items = [
            [$node1, [4, 7, 2, 9, 6, 3, 1]],
            [$node2, [2, 3, 1]],
            [$node3, []],
        ];
    }

    public function testInvertTree(): void
    {
        foreach ($this->items as $item) {
            $node = InvertBinaryTree::invertTree($item[0]);
            self::assertSame($item[1], TreeNode::bfsTreeValues($node));
        }
    }

    public function testInvertTree2(): void
    {
        foreach ($this->items as $item) {
            $node = InvertBinaryTree::invertTree2($item[0]);
            self::assertSame($item[1], TreeNode::bfsTreeValues($node));
        }
    }
}

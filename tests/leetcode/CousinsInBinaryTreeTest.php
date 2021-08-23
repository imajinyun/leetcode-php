<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CousinsInBinaryTree;
use leetcode\util\TreeNode;

class CousinsInBinaryTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $p = new TreeNode(1, new TreeNode(2, new TreeNode(4)), new TreeNode(3));

        $q = new TreeNode(1);
        $q->left = new TreeNode(2);
        $q->right = new TreeNode(3);
        $q->left->left = new TreeNode();
        $q->left->right = new TreeNode(4);
        $q->right->left = new TreeNode();
        $q->right->right = new TreeNode(5);

        $t = new TreeNode(1, new TreeNode(2, null, new TreeNode(4)), new TreeNode(3));
        $this->items = [
            // [$p, 4, 3, false],
            [$q, 5, 4, true],
            // [$t, 2, 3, false],
        ];
    }

    public function testIsCousins(): void
    {
        foreach ($this->items as $item) {
            $actual = CousinsInBinaryTree::isCousins($item[0], $item[1], $item[2]);
            self::assertSame($item[3], $actual);
        }
    }

    public function testIsCousins2(): void
    {
        foreach ($this->items as $item) {
            $actual = (new CousinsInBinaryTree())->isCousins2($item[0], $item[1], $item[2]);
            self::assertSame($item[3], $actual);
        }
    }
}

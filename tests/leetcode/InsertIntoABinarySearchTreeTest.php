<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\InsertIntoABinarySearchTree;
use leetcode\util\TreeNode;
use leetcode\util\Util;

class InsertIntoABinarySearchTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        // Input: [4, 2, 7, 1, 3]
        $p = new TreeNode(4);
        $p->left = new TreeNode(2);
        $p->right = new TreeNode(7);
        $p->left->left = new TreeNode(1);
        $p->left->right = new TreeNode(3);

        // Input: [40, 20, 60, 10, 30, 50, 70]
        $q = new TreeNode(40);
        $q->left = new TreeNode(20);
        $q->right = new TreeNode(60);
        $q->left->left = new TreeNode(10);
        $q->left->right = new TreeNode(30);
        $q->right->left = new TreeNode(50);
        $q->right->right = new TreeNode(70);

        // Input: [4, 2, 7, 1, 3, null, null, null, null, null, null]
        $t = new TreeNode(4);
        $t->left = new TreeNode(2);
        $t->right = new TreeNode(7);
        $t->left->left = new TreeNode(1);
        $t->left->right = new TreeNode(3);

        $this->items = [
            [$p, 5, [4, 2, 7, 1, 3, 5]],
            [$q, 25, [40, 20, 60, 10, 30, 50, 70, 25]],
            [$t, 5, [4, 2, 7, 1, 3, 5]],
        ];
    }

    public function testInsertIntoBST(): void
    {
        foreach ($this->items as $item) {
            $node = InsertIntoABinarySearchTree::insertIntoBST($item[0], $item[1]);
            $actual = TreeNode::bfsTreeValues($node);
            self::assertSame($item[2], $actual);
        }
    }

    public function testInsertIntoBST2(): void
    {
        foreach ($this->items as $item) {
            $node = InsertIntoABinarySearchTree::insertIntoBST2($item[0], $item[1]);
            $actual = TreeNode::bfsTreeValues($node);
            self::assertSame($item[2], $actual);
        }
    }
}

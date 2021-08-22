<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SearchInABinarySearchTree;
use leetcode\util\TreeNode;

class SearchInABinarySearchTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $t1 = new TreeNode(4);
        $t1->left = new TreeNode(2);
        $t1->right = new TreeNode(7);
        $t1->left->left = new TreeNode(1);
        $t1->left->right = new TreeNode(3);

        $t2 = clone $t1;

        $this->items = [
            [$t1, 2, [2, 1, 3]],
            [$t2, 5, []],
        ];
    }

    public function testSearchBST(): void
    {
        foreach ($this->items as $item) {
            $node = SearchInABinarySearchTree::searchBST($item[0], $item[1]);
            self::assertSame(
                $item[2],
                $node instanceof TreeNode ? TreeNode::bfsTreeValues($node) : []
            );
        }
    }
}

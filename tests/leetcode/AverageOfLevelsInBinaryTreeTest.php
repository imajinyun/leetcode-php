<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\AverageOfLevelsInBinaryTree;
use leetcode\util\TreeNode;

class AverageOfLevelsInBinaryTreeTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $t1 = new TreeNode(3);
        $t1->left = new TreeNode(9);
        $t1->right = new TreeNode(20);
        $t1->left->left = new TreeNode();
        $t1->left->right = new TreeNode();
        $t1->right->left = new TreeNode(15);
        $t1->right->right = new TreeNode(7);

        $t2 = new TreeNode(3);
        $t2->left = new TreeNode(9);
        $t2->right = new TreeNode(20);
        $t2->left->left = new TreeNode(15);
        $t2->left->right = new TreeNode(7);

        $this->items = [
            [$t1, [3.00000, 14.50000, 11.00000]],
            [$t2, [3.00000, 14.50000, 11.00000]]
        ];
    }

    public function testAverageOfLevels(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], AverageOfLevelsInBinaryTree::averageOfLevels($item[0]));
        }
    }

    public function testAverageOfLevels2(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], AverageOfLevelsInBinaryTree::averageOfLevels2($item[0]));
        }
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests\util;

use PHPUnit\Framework\TestCase;
use leetcode\util\TreeNode;

class TreeNodeTest extends TestCase
{
    public function testToArray(): void
    {
        $root = new TreeNode(2);
        self::assertSame(2, $root->val);

        $root->left = new TreeNode(1);
        $root->right = new TreeNode(3);
        self::assertSame([2, 1, 3], TreeNode::bfsTreeValues($root));

        $actual = [];
        TreeNode::dfsTreeValues($root, $actual);
        self::assertSame([2, 1, 3], $actual);
    }

    public function testFromArray(): void
    {
        $array = [1, 2];
        $root = TreeNode::fromArray($array);
        self::assertInstanceOf(TreeNode::class, $root);
        self::assertSame(1, $root->val);
        self::assertSame(2, $root->left->val);
        self::assertSame(null, $root->right);

        $array = [3, 5, 1, 6, 2, 0, 8, null, null, 7, 4];
        $root = TreeNode::fromArray($array);
        self::assertInstanceOf(TreeNode::class, $root);
        self::assertSame(3, $root->val);
        self::assertSame(5, $root->left->val);
        self::assertSame(1, $root->right->val);
        self::assertSame(6, $root->left->left->val);
        self::assertSame(2, $root->left->right->val);
        self::assertSame(0, $root->right->left->val);
        self::assertSame(8, $root->right->right->val);
        self::assertSame(7, $root->left->right->left->val);
        self::assertSame(4, $root->left->right->right->val);
    }
}

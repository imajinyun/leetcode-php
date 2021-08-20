<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SameTree;
use PHPUnit\Framework\TestCase;
use leetcode\util\TreeNode;

class SameTreeTest extends TestCase
{
    private TreeNode $p1;
    private TreeNode $p2;
    private TreeNode $p3;
    private TreeNode $q1;
    private TreeNode $q2;
    private TreeNode $q3;

    protected function setUp(): void
    {
        // Input: [1, 2, 3]
        $this->p1 = new TreeNode(1, new TreeNode(2), new TreeNode(3));

        // Input: [1, 2, 3];
        $this->q1 = new TreeNode(1, new TreeNode(2), new TreeNode(3));

        // Input: [1, 2]
        $this->p2 = new TreeNode(1, new TreeNode(2));

        // Input: [1, null, 2]
        $this->q2 = new TreeNode(2, new TreeNode(), new TreeNode(2));

        // Input: [1, 2, 1]
        $this->p3 = new TreeNode(1, new TreeNode(2), new TreeNode(1));

        // Input: [1, 1, 2]
        $this->q3 = new TreeNode(1, new TreeNode(1), new TreeNode(2));
    }

    public function testIsSameTree(): void
    {
        self::assertTrue(SameTree::isSameTree($this->p1, $this->q1));
        self::assertFalse(SameTree::isSameTree($this->p2, $this->q2));
        self::assertFalse(SameTree::isSameTree($this->p3, $this->q3));
    }

    public function testIsSameTree2(): void
    {
        self::assertTrue(SameTree::isSameTree2($this->p1, $this->q1));
        self::assertFalse(SameTree::isSameTree2($this->p2, $this->q2));
        self::assertFalse(SameTree::isSameTree2($this->p3, $this->q3));
    }
}

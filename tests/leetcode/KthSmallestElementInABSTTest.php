<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\KthSmallestElementInABST;
use PHPUnit\Framework\TestCase;
use leetcode\util\TreeNode;

class KthSmallestElementInABSTTest extends TestCase
{
    private TreeNode $p;
    private TreeNode $q;

    protected function setUp(): void
    {
        $this->p = new TreeNode(3);
        $this->p->left = new TreeNode(1);
        $this->p->right = new TreeNode(4);
        $this->p->left->left = new TreeNode();
        $this->p->left->right = new TreeNode(2);

        $this->q = new TreeNode(5);
        $this->q->left = new TreeNode(3);
        $this->q->right = new TreeNode(6);
        $this->q->left->left = new TreeNode(2);
        $this->q->left->right = new TreeNode(4);
        $this->q->left->left->left = new TreeNode(1);
    }

    public function testKthSmallest(): void
    {
        self::assertSame(1, KthSmallestElementInABST::kthSmallest($this->p, 1));
        self::assertSame(3, KthSmallestElementInABST::kthSmallest($this->q, 3));
    }

    public function testKthSmallest2(): void
    {
        self::assertSame(1, KthSmallestElementInABST::kthSmallest2($this->p, 1));
        self::assertSame(3, KthSmallestElementInABST::kthSmallest2($this->q, 3));
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinaryTreeRightSideView;
use leetcode\util\TreeNode;

class BinaryTreeRightSideViewTest extends TestCase
{
    private TreeNode $p;
    private TreeNode $q;
    private TreeNode $t;

    protected function setUp(): void
    {
        $this->p = new TreeNode(1);
        $this->p->left = new TreeNode(2);
        $this->p->right = new TreeNode(3);
        $this->p->left->left = new TreeNode();
        $this->p->left->right = new TreeNode(5);
        $this->p->right->left = new TreeNode();
        $this->p->right->right = new TreeNode(4);

        $this->q = new TreeNode(1);
        $this->q->left = new TreeNode();
        $this->q->right = new TreeNode(3);

        $this->t = new TreeNode();
    }

    public function testRightSideView(): void
    {
        self::assertSame([1, 3, 4], BinaryTreeRightSideView::rightSideView($this->p));
        self::assertSame([1, 3], BinaryTreeRightSideView::rightSideView($this->q));
        self::assertSame([], BinaryTreeRightSideView::rightSideView($this->t));
    }

    public function testRightSideView2(): void
    {
        self::assertSame([1, 3, 4], BinaryTreeRightSideView::rightSideView2($this->p));
        self::assertSame([1, 3], BinaryTreeRightSideView::rightSideView2($this->q));
        self::assertSame([], BinaryTreeRightSideView::rightSideView2($this->t));
    }
}

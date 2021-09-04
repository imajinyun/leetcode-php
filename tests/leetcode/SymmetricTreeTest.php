<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SymmetricTree;
use PHPUnit\Framework\TestCase;
use leetcode\util\TreeNode;

class SymmetricTreeTest extends TestCase
{
    private TreeNode $root1;
    private TreeNode $root2;

    protected function setUp(): void
    {
        $this->root1 = new TreeNode(
            1,
            new TreeNode(2, new TreeNode(3), new TreeNode(4)),
            new TreeNode(2, new TreeNode(4), new TreeNode(3)),
        );
        $this->root2 = new TreeNode(
            1,
            new TreeNode(2, null, new TreeNode(3)),
            new TreeNode(2, null, new TreeNode(3))
        );
    }

    public function testIsSymmetric(): void
    {
        self::assertTrue(SymmetricTree::isSymmetric($this->root1));
        self::assertFalse(SymmetricTree::isSymmetric($this->root2));
    }

    public function testIsSymmetric2(): void
    {
        self::assertTrue(SymmetricTree::isSymmetric2($this->root1));
        self::assertFalse(SymmetricTree::isSymmetric2($this->root2));
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\UniqueBinarySearchTreesII;
use leetcode\util\TreeNode;
use PHPUnit\Framework\TestCase;

class UniqueBinarySearchTreesIITest extends TestCase
{
    public function testGenerateTrees(): void
    {
        $expect = [
            [1, 2, 3],
            [1, 3, 2],
            [2, 1, 3],
            [3, 1, 2],
            [3, 2, 1]
        ];
        $actual = [];
        $trees = UniqueBinarySearchTreesII::generateTrees(3);
        foreach ($trees as $key => $tree) {
            $n = count($expect[$key]);
            $list = [];
            TreeNode::dfsTreeValues($tree, $list);
            $actual[$key] = array_slice($list, 0, $n);
        }
        self::assertSame($expect, $actual);

        $actual = [];
        foreach ($trees as $key => $tree) {
            $n = count($expect[$key]);
            $list = TreeNode::bfsTreeValues($tree, $list);
            $actual[$key] = array_slice($list, 0, $n);
        }
        self::assertSame($expect, $actual);
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindLargestValueInEachTreeRow;
use leetcode\util\TreeNode;

class FindLargestValueInEachTreeRowTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        // Input: [1, 3, 2, 5, 3, null, 9]
        $t1 = new TreeNode(1);
        $t1->left = new TreeNode(3);
        $t1->right = new TreeNode(2);
        $t1->left->left = new TreeNode(5);
        $t1->left->right = new TreeNode(3);
        $t1->right->left = new TreeNode();
        $t1->right->right = new TreeNode(9);

        // Input: [1, 2, 3]
        $t2 = new TreeNode(1, new TreeNode(2), new TreeNode(3));

        // Input: [1]
        $t3 = new TreeNode(1);

        // Input: [1, null, 2]
        $t4 = new TreeNode(1, new TreeNode(), new TreeNode(2));

        // Input: []
        $t5 = [];

        $this->items = [
            [$t1, [1, 3, 9]],
            [$t2, [1, 3]],
            [$t3, [1]],
            [$t4, [1, 2]],
            [$t5 ?: null, []],
        ];
    }

    public function testLargestValues(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], FindLargestValueInEachTreeRow::largestValues($item[0]));
        }
    }

    public function testLargestValues2(): void
    {
        foreach ($this->items as $item) {
            self::assertSame($item[1], FindLargestValueInEachTreeRow::largestValues2($item[0]));
        }
    }
}

<?php

namespace leetcode\util;

class MinHeap
{
    private array $heap;

    public function __construct()
    {
        $this->heap = [];
    }

    public function push(int $val): void
    {
        $this->heap[] = $val;
        $this->siftUp(count($this->heap) - 1);
    }

    public function pop()
    {
        if (empty($this->heap)) {
            throw new \InvalidArgumentException('Min heap is empty');
        }

        $leaf = array_pop($this->heap);

        if (empty($this->heap)) {
            return $leaf;
        }
        $value = $this->getRoot();
        $this->setRoot($leaf);

        return $value;
    }

    public function count(): int
    {
        return count($this->heap);
    }

    public function top()
    {
        return current($this->heap);
    }

    public function compare(int $a, int $b): int
    {
        return $a <=> $b;
    }

    public function getRoot(): int
    {
        return $this->heap[0];
    }

    public function setRoot(int $leaf): void
    {
        $this->heap[0] = $leaf;
        $this->siftDown(0);
    }

    private function siftUp(int $leaf): void
    {
        while ($leaf > 0) {
            $parent = $this->parent($leaf);
            if ($this->compare($this->heap[$leaf], $this->heap[$parent]) > 0) {
                break;
            }
            [$this->heap[$leaf], $this->heap[$parent]] = [$this->heap[$parent], $this->heap[$leaf]];
            $leaf = $parent;
        }
    }

    private function siftDown(int $node): void
    {
        $last = (int) floor(count($this->heap) / 2);

        for ($parent = $node; $parent < $last; $parent = $leaf) {
            $leaf = $this->getSmallestLeaf($parent);
            if ($this->compare($this->heap[$parent], $this->heap[$leaf]) < 0) {
                break;
            }
            [$this->heap[$leaf], $this->heap[$parent]] = [$this->heap[$parent], $this->heap[$leaf]];
        }
    }

    private function getSmallestLeaf(int $parent): int
    {
        $left = $this->left($parent);
        $right = $this->right($parent);

        if ($right < count($this->heap) && $this->compare($this->heap[$left], $this->heap[$right]) > 0) {
            return $right;
        }

        return $left;
    }

    private function left(int $index): int
    {
        return ($index * 2) + 1;
    }

    private function right(int $index): int
    {
        return ($index * 2) + 2;
    }

    private function parent(int $index): int
    {
        return ($index - 1) / 2;
    }
}

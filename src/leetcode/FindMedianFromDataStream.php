<?php

declare(strict_types=1);

namespace leetcode;

class FindMedianFromDataStream
{
    private \SplMinHeap $small;
    private \SplMaxHeap $large;
    private bool $isEven = true;

    private \SplMinHeap $min;
    private \SplMinHeap $max;

    public function __construct()
    {
        $this->small = new \SplMinHeap();
        $this->large = new \SplMaxHeap();

        $this->min = new \SplMinHeap();
        $this->max = new \SplMinHeap();
    }

    public function addNum(int $num): void
    {
        if ($this->isEven) {
            $this->large->insert($num);
            $this->small->insert($this->large->extract());
        } else {
            $this->small->insert($num);
            $this->large->insert($this->small->extract());
        }
        $this->isEven = !$this->isEven;
    }

    public function addNum2(int $num): void
    {
        $this->max->insert($num);
        $this->min->insert(-$this->max->extract());
        if ($this->min->count() > $this->max->count()) {
            $this->max->insert(-$this->min->extract());
        }
    }

    public function findMedian(): float
    {
        if ($this->isEven) {
            return !$this->small->isEmpty() && !$this->large->isEmpty()
                ? ($this->small->top() + $this->large->top()) / 2.0
                : 0;
        } else {
            return $this->small->isEmpty() ? 0 : $this->small->top();
        }
    }

    public function findMedian2(): float
    {
        if ($this->min->count() < $this->max->count()) {
            return $this->max->isEmpty() ? 0 : $this->max->top();
        } else {
            $max = $this->max->isEmpty() ? 0 : $this->max->top();
            $min = $this->min->isEmpty() ? 0 : $this->min->top();
            return ($max - $min) / 2.0;
        }
    }
}

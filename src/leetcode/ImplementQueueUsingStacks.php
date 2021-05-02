<?php

declare(strict_types=1);

namespace leetcode;

class ImplementQueueUsingStacks
{
    private array $cache = [];
    private array $stack = [];
    private ?int $front;

    public function push(int $value): void
    {
        if (empty($this->stack)) {
            $this->front = $value;
        }
        while (! empty($this->stack)) {
            $this->cache[] = array_shift($this->stack);
        }
        $this->cache[] = $value;
        while (! empty($this->cache)) {
            $this->stack[] = array_shift($this->cache);
        }
    }

    public function pop(): ?int
    {
        $value = array_shift($this->stack);
        if (! empty($this->stack)) {
            $this->front = current($this->stack);
        }

        return $value;
    }

    public function peek(): ?int
    {
        if (empty($this->stack)) {
            return null;
        }

        return $this->front;
    }

    public function empty(): bool
    {
        return count($this->stack) === 0 && count($this->cache) === 0;
    }
}

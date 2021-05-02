<?php

declare(strict_types=1);

namespace leetcode;

class ImplementQueueUsingStacks2
{
    private array $cache;
    private array $stack;

    public function push(int $value): void
    {
        $this->cache[] = $value;
    }

    public function pop(): ?int
    {
        $this->peek();

        return array_shift($this->stack);
    }

    public function peek(): ?int
    {
        if (empty($this->stack)) {
            while (! empty($this->cache)) {
                $this->stack[] = array_shift($this->cache);
            }
        }

        if (empty($this->stack)) {
            return null;
        }

        return current($this->stack);
    }

    public function empty(): bool
    {
        return empty($this->stack) && empty($this->cache);
    }
}

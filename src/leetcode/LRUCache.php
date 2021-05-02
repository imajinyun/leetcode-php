<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\LRUNode;

class LRUCache
{
    /** @var array */
    private array $map;

    /** @var \leetcode\util\LRUNode */
    private LRUNode $head;

    /** @var \leetcode\util\LRUNode */
    private LRUNode $tail;

    /** @var int */
    protected int $capacity;

    public function __construct(int $capacity)
    {
        $this->head = new LRUNode(0, 0);
        $this->tail = new LRUNode(0, 0);
        $this->capacity = $capacity;

        $this->head->setNext($this->tail);
        $this->tail->setPrev($this->head);
    }

    public function get(int $key)
    {
        if (! isset($this->map[$key])) {
            return null;
        }

        /** @var \leetcode\util\LRUNode $node */
        $node = $this->map[$key];

        if (count($this->map) === 1) {
            return $node->getVal();
        }
        $this->detach($node);
        $this->attach($this->head, $node);

        return $node->getVal();
    }

    public function put(int $key, $val): bool
    {
        if ($this->capacity <= 0) {
            return false;
        }

        if (isset($this->map[$key]) && ! empty($this->map[$key])) {
            /** @var \leetcode\util\LRUNode $node */
            $node = $this->map[$key];
            $this->detach($node);
            $this->attach($this->head, $node);
            $node->setVal($val);
        } else {
            $node = new LRUNode($key, $val);
            $this->map[$key] = $node;
            $this->attach($this->head, $node);

            if (count($this->map) > $this->capacity) {
                $nodeToRemove = $this->tail->getPrev();
                $this->detach($nodeToRemove);
                unset($this->map[$nodeToRemove->getKey()]);
            }
        }

        return true;
    }

    public function remove(int $key): bool
    {
        if (! isset($this->map[$key])) {
            return false;
        }

        /** @var \leetcode\util\LRUNode $nodeToRemove */
        $nodeToRemove = $this->map[$key];
        $this->detach($nodeToRemove);
        unset($this->map[$nodeToRemove->getKey()]);

        return true;
    }

    public function all(): array
    {
        return $this->map;
    }

    private function attach(LRUNode $head, LRUNode $node): void
    {
        $node->setPrev($head);
        $node->setNext($head->getNext());
        $node->getPrev()->setNext($node);
        $node->getNext()->setPrev($node);
    }

    private function detach(LRUNode $node): void
    {
        $node->getPrev()->setNext($node->getNext());
        $node->getNext()->setPrev($node->getPrev());
    }
}

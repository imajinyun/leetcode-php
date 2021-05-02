<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ImplementQueueUsingStacks2;
use PHPUnit\Framework\TestCase;

class ImplementQueueUsingStacks2Test extends TestCase
{
    private ImplementQueueUsingStacks2 $queue;

    protected function setUp(): void
    {
        $this->queue = new ImplementQueueUsingStacks2();
    }

    public function testQueue(): void
    {
        self::assertNull($this->queue->peek());

        $this->queue->push(1);
        self::assertSame(1, $this->queue->peek());

        $this->queue->push(2);
        self::assertSame(1, $this->queue->peek());

        $this->queue->push(3);
        self::assertSame(1, $this->queue->peek());

        self::assertSame(1, $this->queue->pop());
        self::assertSame(2, $this->queue->pop());
        self::assertSame(3, $this->queue->pop());

        self::assertNull($this->queue->pop());
        self::assertNull($this->queue->peek());
        self::assertTrue($this->queue->empty());
    }

    public function testEmpty(): void
    {
        self::assertTrue($this->queue->empty());
    }
}

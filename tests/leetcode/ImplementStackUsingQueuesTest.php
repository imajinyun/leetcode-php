<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ImplementStackUsingQueues;
use PHPUnit\Framework\TestCase;

class ImplementStackUsingQueuesTest extends TestCase
{
    private ImplementStackUsingQueues $stack;

    protected function setUp(): void
    {
        $this->stack = new ImplementStackUsingQueues();
    }

    public function testPush(): void
    {
        self::assertNull($this->stack->top());

        $this->stack->push(1);
        self::assertSame(1, $this->stack->top());

        $this->stack->push(2);
        self::assertSame(2, $this->stack->top());

        $this->stack->push(3);
        self::assertSame(3, $this->stack->top());

        self::assertSame(3, $this->stack->pop());
        self::assertSame(2, $this->stack->pop());
        self::assertSame(1, $this->stack->pop());

        self::assertTrue($this->stack->empty());
        self::assertNull($this->stack->pop());
    }

    public function testEmpty(): void
    {
        self::assertTrue($this->stack->empty());
    }
}

<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DesignLinkedList;

class DesignLinkedListTest extends TestCase
{
    public function testDesignLinkedList(): void
    {
        $object = new DesignLinkedList();
        self::assertSame(-1, $object->get(3));

        $object->addAtHead(1);
        self::assertSame(1, $object->get(0));

        $object->addAtTail(3);
        self::assertSame(3, $object->get(1));

        $object->addAtIndex(1, 2);
        self::assertSame(2, $object->get(1));

        $object->deleteAtIndex(1);
        self::assertSame(1, $object->get(0));
        self::assertSame(3, $object->get(1));
        self::assertSame(-1, $object->get(2));
    }

    public function testDesignLinkedList2(): void
    {
        $object = new DesignLinkedList();
        $object->addAtHead(1);
        self::assertSame(1, $object->get(0));

        $object->addAtTail(3);
        self::assertSame(3, $object->get(1));

        $object->addAtIndex(1, 2);
        self::assertSame(2, $object->get(1));

        $object->deleteAtIndex(0);
        self::assertSame(2, $object->get(0));
    }
}

<?php

declare(strict_types=1);

use leetcode\LRUCache;
use PHPUnit\Framework\TestCase;

class LRUCacheTest extends TestCase
{
    public function testLRUCacheGetAndPut(): void
    {
        $cache = new LRUCache(2);
        self::assertTrue($cache->put(1, 1));
        self::assertTrue($cache->put(2, 2));

        self::assertSame(1, $cache->get(1));

        self::assertTrue($cache->put(3, 3));
        self::assertNull($cache->get(2));

        self::assertTrue($cache->put(4, 4));
        self::assertNull($cache->get(1));

        self::assertSame(3, $cache->get(3));
        self::assertSame(4, $cache->get(4));
    }

    public function testLRUCacheRemove(): void
    {
        $cache = new LRUCache(3);
        self::assertTrue($cache->put(1, 'this'));
        self::assertTrue($cache->put(2, 'is'));
        self::assertTrue($cache->put(3, 'a'));
        self::assertTrue($cache->put(4, 'test'));

        self::assertNull($cache->get(1));

        self::assertSame('is', $cache->get(2));

        self::assertTrue($cache->remove(3));

        self::assertTrue($cache->put(5, 'hello'));
        self::assertTrue($cache->put(6, 'world'));
        self::assertTrue($cache->put(7, '!'));

        self::assertNull($cache->get(4));

        self::assertSame('hello world!', $cache->get(5) . ' ' . $cache->get(6) . $cache->get(7));

        self::assertTrue($cache->remove(5));
        self::assertTrue($cache->remove(6));
        self::assertTrue($cache->remove(7));
        self::assertFalse($cache->remove(7));

        self::assertEmpty($cache->all());
    }
}

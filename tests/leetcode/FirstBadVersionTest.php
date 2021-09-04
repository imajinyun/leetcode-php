<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FirstBadVersion;

class FirstBadVersionTest extends TestCase
{
    public function testFirstBadVersion(): void
    {
        self::assertSame(4, FirstBadVersion::firstBadVersion(5, 4));
        self::assertSame(1, FirstBadVersion::firstBadVersion(1, 1));
    }
}

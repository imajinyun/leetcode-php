<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindWordsThatCanBeFormedByCharacters;

class FindWordsThatCanBeFormedByCharactersTest extends TestCase
{
    public function testCountCharacters(): void
    {
        self::assertSame(
            6,
            FindWordsThatCanBeFormedByCharacters::countCharacters(['cat', 'bt', 'hat', 'tree'], 'atach')
        );
        self::assertSame(
            10,
            FindWordsThatCanBeFormedByCharacters::countCharacters(['hello', 'world', 'leetcode'], 'welldonehoneyr')
        );
    }
}

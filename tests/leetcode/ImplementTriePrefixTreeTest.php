<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ImplementTriePrefixTree;
use PHPUnit\Framework\TestCase;

class ImplementTriePrefixTreeTest extends TestCase
{
    public function testTriePrefix(): void
    {
        $trie = new ImplementTriePrefixTree();
        $trie->insert('vscode');
        self::assertTrue($trie->search('vscode'));
        self::assertFalse($trie->search('code'));
        self::assertTrue($trie->startsWith('vs'));

        $trie->insert('php');
        self::assertTrue($trie->search('php'));
    }
}

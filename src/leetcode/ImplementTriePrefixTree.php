<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TrieNode;

class ImplementTriePrefixTree
{
    /** @var \leetcode\util\TrieNode */
    private $root;

    public function __construct()
    {
        $this->root = new TrieNode();
    }

    public function insert(string $word): void
    {
        /** @var \leetcode\util\TrieNode $node */
        $node = $this->root;
        for ($i = 0, $n = strlen($word); $i < $n; $i++) {
            $value = $word[$i];
            if (!isset($node->children[$value])) {
                $node->children[$value] = new TrieNode($value);
            }
            $node = $node->children[$value];
        }
        $node->isWord = true;
    }

    public function search(string $prefix): bool
    {
        $node = $this->root;
        for ($i = 0, $n = strlen($prefix); $i < $n; $i++) {
            $value = $prefix[$i];
            if (!isset($node->children[$value])) {
                return false;
            }
            $node = $node->children[$value];
        }

        return $node->isWord;
    }

    public function startsWith(string $prefix): bool
    {
        $node = $this->root;
        for ($i = 0, $n = strlen($prefix); $i < $n; $i++) {
            $value = $prefix[$i];
            if (!isset($node->children[$value])) {
                return false;
            }
            $node = $node->children[$value];
        }

        return true;
    }
}

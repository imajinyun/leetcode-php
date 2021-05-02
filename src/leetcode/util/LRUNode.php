<?php

declare(strict_types=1);

namespace leetcode\util;

/**
 * @method \leetcode\util\LRUNode setKey(int $key)
 * @method int getKey()
 * @method \leetcode\util\LRUNode setVal(int $val)
 * @method int|string getVal()
 * @method \leetcode\util\LRUNode setPrev(\leetcode\util\LRUNode $node)
 * @method \leetcode\util\LRUNode getPrev()
 * @method \leetcode\util\LRUNode setNext(\leetcode\util\LRUNode $node)
 * @method \leetcode\util\LRUNode getNext()
 */
class LRUNode
{
    private int $key;
    private $val;
    private ?LRUNode $prev;
    private ?LRUNode $next;

    public function __construct(int $key, $val)
    {
        $this->key = $key;
        $this->val = $val;
    }

    public function __call(string $name, $arguments = null)
    {
        if (false !== $pos = strpos($name, 'set')) {
            $name = strtolower(substr($name, $pos + 3));
            $this->{$name} = $arguments[0];
            return $this;
        }

        if (false !== $pos = strpos($name, 'get')) {
            $name = strtolower(substr($name, $pos + 3));

            return $this->{$name};
        }
    }
}

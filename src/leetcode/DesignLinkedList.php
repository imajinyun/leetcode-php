<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class DesignLinkedList
{
    private int $size;

    private ?ListNode $head;

    /**
     * Initialize your data structure here.
     */
    public function __construct()
    {
        $this->size = 0;
        $this->head = null;
    }

    /**
     * Get the value of the index-th node in the linked list.
     * If the index is invalid, return -1.
     *
     * @param int $index
     *
     * @return int
     */
    public function get(int $index): int
    {
        if ($index < 0 || $index >= $this->size) {
            return -1;
        }
        $curr = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $curr = $curr->next;
        }

        return $curr->val;
    }

    /**
     * Add a node of value val before the first element of the linked list.
     * After the insertion, the new node will be the first node of the linked list.
     *
     * @param int $val
     *
     * @return null
     */
    public function addAtHead(int $val): void
    {
        $this->addAtIndex(0, $val);
    }

    /**
     * Append a node of value val to the last element of the linked list.
     *
     * @param int $val
     *
     * @return null
     */
    public function addAtTail($val): void
    {
        $this->addAtIndex($this->size, $val);
    }

    /**
     * Add a node of value val before the index-th node in the linked list.
     * If index equals to the length of linked list,
     * the node will be appended to the end of linked list.
     * If index is greater than the length, the node will not be inserted.
     *
     * @param int $index
     * @param int $val
     *
     * @return null
     */
    public function addAtIndex(int $index, int $val): void
    {
        if ($index > $this->size) {
            return;
        }
        $node = new ListNode($val);
        $curr = $this->head;

        if ($index <= 0) {
            $node->next = $curr;
            $this->head = $node;
        } else {
            for ($i = 0; $i < $index - 1; $i++) {
                $curr = $curr->next;
            }
            $node->next = $curr->next;
            $curr->next = $node;
        }
        $this->size++;
    }

    /**
     * Delete the index-th node in the linked list, if the index is valid.
     *
     * @param int $index
     *
     * @return null
     */
    public function deleteAtIndex(int $index): void
    {
        if ($index < 0 || $index >= $this->size) {
            return;
        }
        $curr = $this->head;
        if ($index === 0) {
            $this->head = $curr->next;
        } else {
            for ($i = 0; $i < $index - 1; $i++) {
                $curr = $curr->next;
            }
            $curr->next = $curr->next->next;
        }
        $this->size--;
    }
}

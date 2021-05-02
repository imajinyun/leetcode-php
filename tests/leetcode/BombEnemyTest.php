<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BombEnemy;
use PHPUnit\Framework\TestCase;

class BombEnemyTest extends TestCase
{
    private array $grids;

    protected function setUp(): void
    {
        $this->grids = [
            ['0', 'E', '0', '0'],
            ['E', '0', 'W', '0'],
            ['0', 'E', '0', '0'],
        ];
    }

    public function testMaxKilledEnemies(): void
    {
        self::assertEquals(3, BombEnemy::maxKilledEnemies($this->grids));
    }

    public function testMaxKilledEnemies2(): void
    {
        self::assertEquals(3, BombEnemy::maxKilledEnemies2($this->grids));
    }
}

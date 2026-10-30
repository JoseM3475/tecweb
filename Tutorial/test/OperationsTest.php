<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Operations.php';

class OperationsTest extends TestCase
{
    private $op;

    protected function setUp(): void
    {
        $this->op = new Operations();
    }

    public function testSumWithTwoValues(): void
    {
        $this->assertEquals(5, $this->op->sum(2, 3));
    }
}
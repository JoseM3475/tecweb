<?php
use PHPUnit\Framework\TestCase;
require_once 'src/Operations.php';

class OperationsTest extends TestCase {

    private $op;

    public function setUp(): void {
        $this->op = new Operations();
    }

    public function testSumWithTwoValues() {
       
        $this->assertEquals(5, $this->op->sum(2, 3));
    }

}
?>
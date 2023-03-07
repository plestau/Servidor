<?php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Calculadora();
    }

    public function testSumWithTwoValues(){
        $this->assertEquals(5, $this->op->sum(2, 3));
    }

    public function testSumWithTwoNullValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->sum(null, null);
    }

    public function testSumWithNotNumericValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->sum("a", "hello");
    }

    public function testSubWithTwoValues(){
        $this->assertEquals(1, $this->op->sub(3, 2));
    }

    public function testSubWithTwoNullValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->sub(null, null);
    }

    public function testSubWithNotNumericValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->sub("a", "hello");
    }

    public function testMulWithTwoValues(){
        $this->assertEquals(6, $this->op->mul(2, 3));
    }

    public function testMulWithTwoNullValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->mul(null, null);
    }

    public function testMulWithNotNumericValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->mul("a", "hello");
    }

    public function testDivideWithTwoValues(){
        $this->assertEquals(2, $this->op->div(4, 2));
    }

    public function testDivideWithTwoNullValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->div(null, null);
    }

    public function testDivideWithNotNumericValues(){
        $this->expectException(InvalidArgumentException::class);
        $this->op->div("a", "hello");
    }

    public function testDivideBetweenZero(){
        $this->expectException(DivisionByZeroError::class);
        $this->op->div(4, 0);
    }

}
?>
<?php
include '13/ComplexNumber.php';

use PHPUnit\Framework\TestCase;

class ComplexNumberTest extends TestCase
{
    public function testAdd(){
    $firstNumber = new ComplexNumber(1.0, 3);
    $secondNumber = new ComplexNumber(4, -5);
    $result = new ComplexNumber(5, -2);
    $this->assertEquals($firstNumber->add($secondNumber), $result);
    }

    public function testDiv(){
        $firstNumber = new ComplexNumber(11, 7);
        $secondNumber = new ComplexNumber(6, 3);
        $result = new ComplexNumber(1.9333333333333, 0.2);
        $this->assertEquals($firstNumber->div($secondNumber), $result);
    }

    public function testSub(){
        $firstNumber = new ComplexNumber(9, 6);
        $secondNumber = new ComplexNumber(6, 3);
        $result = new ComplexNumber(3, 3);
        $this->assertEquals($firstNumber->sub($secondNumber), $result);
    }

    public function testAbs(){
        $number = new ComplexNumber(4, 3);
        $result = new ComplexNumber(5, 0);
        $this->assertEquals($number->abs()->__toString(), $result->__toString());
    }

    public function testMult(){
        $firstNumber = new ComplexNumber(11, 6);
        $secondNumber = new ComplexNumber(6, 3);
        $result = new ComplexNumber(48, 69);
        $this->assertEquals($firstNumber->mult($secondNumber), $result);
    }
}

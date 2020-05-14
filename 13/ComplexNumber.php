<?php
class ComplexNumber
{
    private float $real;
    private float $imaginary;

    /**
     * ComplexNumber constructor.
     * @param $real
     * @param $imaginary
     */
    public function __construct(float $real, float $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function __toString()
    {
        $str = $this->real."";
        if($this->imaginary > 0){
            $str .= "+".$this->imaginary."i";
        } elseif ($this->imaginary < 0){
            $str .= ($this->imaginary)."i";
        }
        return $str;
    }

    public function add(ComplexNumber $num): ComplexNumber //сложение
    {
        $real = $this->real + $num->real;
        $imaginary = $this->imaginary + $num->imaginary;
        return new ComplexNumber($real, $imaginary);
    }

    public function sub(ComplexNumber $num): ComplexNumber //вычитание
    {
        $real = $this->real - $num->real;
        $imaginary = $this->imaginary - $num->imaginary;
        return new ComplexNumber($real, $imaginary);
    }

    public function mult(ComplexNumber $num): ComplexNumber
    { //умножение
        $real = $this->real * $num->real - $num->imaginary * $this->imaginary;
        $imaginary = $this->real * $num->imaginary + $num->real * $this->imaginary;
        return new ComplexNumber($real, $imaginary);
    }

    public function div(ComplexNumber $num): ComplexNumber
    { //деление
        $a1 = $this->real;
        $b1 = $this->imaginary;
        $a2 = $num->real;
        $b2 = $num->imaginary;
        if($b2 != 0 && $a2 != 0){
            $real = ($a1 * $a2 + $b1 * $b2) / ($a2 * $a2 + $b2 * $b2);
            $imaginary = ($a2 * $b1 - $a1 * $b2) / ($a2 * $a2 + $b2 * $b2);
            return new ComplexNumber($real, $imaginary);
        }else print 'на ноль делить нельзя!';
    }

    public function abs(): ComplexNumber//модуль
    {
        $z = $this->real * $this->real + $this->imaginary * $this->imaginary;
        return new ComplexNumber(sqrt($z), 0);
    }

}


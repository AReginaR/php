<?php
use exceptions\Exception1;
use exceptions\Exception2;
use exceptions\Exception3;
use exceptions\Exception4;
use exceptions\Exception5;

class GenerateExceptions
{
    public function f1(){
        $this -> generateException();
    }
    public function f2(){
        $this -> generateException();
    }
    public function f3(){
        $this -> generateException();
    }
    public function f4(){
        $this -> generateException();
    }

    public function generateException(){
        $num = random_int(1, 5);
        switch ($num){
            case 1:
                throw new Exception1("Сработало 1 исключение"."\n");
                break;
            case 2:
                throw new Exception2("Сработало 2 исключение"."\n");
                break;
            case 3:
                throw new Exception3("Сработало 3 исключение"."\n");
                break;
            case 4:
                throw new Exception4("Сработало 4 исключение"."\n");
                break;
            case 5:
                throw new Exception5("Сработало 5 исключение"."\n");
                break;
            default:
                echo "Error"."\n";
        }

    }

}
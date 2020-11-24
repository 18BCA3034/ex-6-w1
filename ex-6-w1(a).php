<?php
echo 'Experement 6 (a)<br>';
class Calculator{
    public $value1, $value2;
    function __construct($val1, $val2){
        $this->value1 = $val1;
        $this->value2 = $val2;
    }
    public function add(){
        $result= $this->value1 + $this->value2;
        echo "Addition : $result <br>";
    }
    public function sub(){
        $result= $this->value1 - $this->value2;
        echo "Subtraction : $result <br>";
    }
    public function mul(){
        $result= $this->value1 * $this->value2;
        echo "Multiplication : $result <br>";
    }
    public function div(){
        $result= $this->value1 / $this->value2;
        echo "Division : $result <br>";
    }
}
$object = new Calculator(12, 6);
$object->add();
$object->sub();
$object->mul();
$object->div();

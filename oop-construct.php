<?php
//create a class
class myclass{
    var $number1;
    var $number2;
    var $total;

    //create a function
    public function __construct($num1,$num2){
        $this->number1=$num1;
        $this->number2=$num2;
    }
public function find_sum(){
    $this->total=$this->number1 + $this->number2;
}
public function print_sum(){
    echo "Total value is:".$this->total."<br>";
}

public function find_avg(){
    $this->avg=($this->number1 + $this->number2)/2;
}
public function print_avg(){
    echo "Total avg is:".$this->avg;
}
}
//create a object
$ob = new myclass(500,600);
// $ob->input_two_numbers(100,200);
$ob->find_sum();
$ob->print_sum();
$ob->find_avg();
$ob->print_avg();

?>
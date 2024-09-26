<?php

abstract class Car3{
    public function noOFWheels(){
        echo "Wheel : 4<br />";
    }
    abstract public function price($price);
}
class BMW3 extends Car3{
    public function price($price)
    {
        echo "Price : . $price";
    }
}
$bmw3 = new BMW3();
$bmw3->noOFWheels();
$bmw3->price(100);
<?php

class Car{
    // properties
    public $name = "car name";
    // methods (function)
    public function getCarName(){
        return $this->name;
    }

    public function setCarName($car_name){
        return $this->name = $car_name;
    }
}
$bmw = new Car();
$bmw->name = "BMW Car";
// echo $bmw->getCarName();

//2nd object

$nissan = new Car();
$nissan->setCarName("Nissan Car");
echo $nissan->getCarName();
<?php

class Cars{
    // properties
    public $name;

    public function __construct($car_name){
        $this->name = $car_name;
    }

    // methods (function)
    public function getCarName(){
        return $this->name;
    }
}
$bmw = new Cars("Audi Car");
echo $bmw->getCarName();
// echo $bmw->getCarName();

//2nd object

// $nissan = new Car();
// $nissan->setCarName("Nissan Car");
// echo $nissan->getCarName();
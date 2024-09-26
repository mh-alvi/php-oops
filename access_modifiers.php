<?php

class Car{
    // properties
    public $name = "car name";
    private $model = "car model";
    protected $color = "car color";
    public function all(){

        echo $this->name. '<br/>';
        echo $this->model. '<br/>';
        echo $this->color. '<br/>';
    }
}
$bmw = new Car();
$bmw->all();
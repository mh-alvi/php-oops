<?php

class CarI{
    // properties
    public $name;
    private $model;
    protected $color;
    
    public function __construct($name, $model, $color){
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }
    public function poweredBy(){
        echo "Petrol";
    }

    //can't inherit final method
    final function numofWheels(){
        echo 4;
    }

    protected function intro() {
        echo "The car is {$this->name} and the color is {$this->color}.";
    }
    public function all(){
        
        echo $this->name. '<br/>';
        echo $this->model. '<br/>';
        echo $this->color. '<br/>';
        // echo $this->owner_name. '<br/>';
    }
}

class Tesla extends CarI{
    //owner name
    // public $owner_name;
    // public function __construct($name, $model, $color, $owner_name){
    //     $this->name = $name;
    //     $this->model = $model;
    //     $this->color = $color;
    //     $this->owner_name = $owner_name;
    // }
    //overrides
    public function poweredBy(){
        echo "Electricity. <br />";
    }

    public function message() {
        echo "Am I a car or a Toy?<br />";
        // Call protected method from within derived class - OK
        $this -> intro();
      }
    

}

$tesla = new Tesla("Tesla","Tesla-S","Blue","Mr.X");
$tesla->all();
$tesla->poweredBy();
$tesla->message();

//can't inherit final class
final class BWM{
    public function poweredBy(){
        echo "<br/>Power";
    }
}
$bmw = new BWM;
$bmw->poweredBy();
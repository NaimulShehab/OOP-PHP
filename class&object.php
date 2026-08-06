<?php

class Car{

    //properties
    public $name = "Car";

    //method(function)
    public function getCarName(){
        return $this->name;
    }
    public function setCarName($car_name){
        $this->name = $car_name;
    }
}
//object
$bmw = new Car();
$bmw->name = "BMW";
echo $bmw->name;
echo $bmw->getCarName();

//2nd object
$nissan = new Car();
$nissan->setCarName("Nissan Car");
echo $nissan->getCarName();
?>

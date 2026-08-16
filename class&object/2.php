<?php 

class Car {
	//properties
	public $name = "car name";


	//functions or methods

	public function getCar(){
		return $this->name;
	}

	public function setCar($car_name){
		$this->name = $car_name;
	}
}

//1st object
$bmw = new Car();
$bmw->name = "BMW Car";
// echo $bmw->name;
// echo $bmw->getCar();

//2nd object
$nissan = new Car();
$nissan->setCar("Nissan Car");
echo $nissan->getCar();

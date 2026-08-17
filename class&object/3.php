<?php 

class Fruit {

	//properties
	public $name = "Fruit name";

	public function getName(){
		return $this->name;// this is used because the name variable belongs to this class
	}

	public function setCarName($car_name){
		return $this->name = $car_name;
	}

}
//object
$mango = new Fruit();

//rewrite or change the value of name property
$mango->name = "BMW car";

//set car name using function 
$mango->setCarName("Nissan car");
// echo $mango->name."<br>";


echo $mango->getName();

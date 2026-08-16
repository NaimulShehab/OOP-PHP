<?php 

class Fruit {

	//properties
	public $name = "Fruit name";

	public function getName(){
		return "This a fruit function";
	}

}
//object
$mango = new Fruit();

echo $mango->name."<br>";

echo $mango->getName();

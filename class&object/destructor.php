<?php

class Animal{

	public $name;

	public function __construct($animal_name="tiger"){
		$this->name = $animal_name;
		echo "Animal object is created <br>";
	}

	public function __destruct(){
		echo "Animal object is destroyed <br>";
	}

}

$animal = new Animal("Cat");

echo "Animal name: " . $animal->name . "<br>";

?>

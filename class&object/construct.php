<?php

class Animal{

	public $name;
	public $species;

	public function __construct($animal_name="Human",$animal_species="Homosepience"){
		$this->name = $animal_name;
		$this->species = $animal_species;
	}

	public function getAnimalName(){
		return $this->name;
	}
	public function getSpecies(){
		return $this->species;
	}
}
$human = new Animal();
echo $human->getAnimalName()."<br>";
echo $human->getSpecies()."<br>";

$doyel_pakhi = new Animal("Oriental magpie-robin","Copsychus saularis");
echo $doyel_pakhi->getAnimalName().'<br>';
echo $doyel_pakhi->getSpecies();

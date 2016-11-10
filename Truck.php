<?php 
	// this file will extend PArentClass.php

	class Truck extends Automobile {
		private $type;
    private $make;
    private $model;
    private $year;
    private $milage;
    

    
    public function __toString()
    {
      $truck = "This ". $this->getType() . " is a ";
      $what = $this->getYear() . " " . $this->getMake() . " " . $this->getModel() . ".";
      $miles = "It has " . $this->getMilage() . " miles on it.";
      return $truck . $what . "<br>" . $miles;
    }
    public function __destruct() {
      echo "Destroying " . $this->getMake() . " " . $this->getModel() . "<br>";
    }
  }
?>
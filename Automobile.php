<?php
	// This is the file for the parent class

	class Automobile {
		private $make;
    private $model;
    private $year;
    private $milage;
    private $type;
    private $engine;
    
    public function __construct($make, $model, $year, $milage, $type, $engine) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
      $this->milage = $milage;
      $this->type = $type;
      $this->engine = $engine;
    }
    
    public function setEngine($e) {
      $this->engine = $e;
    }
    
    public function getEngine() {
      return $this->engine;
    }
    
    public function setMake($m) {
      $this->make = $m;
    }
    public function getMake() {
      return $this->make;
    }
    
    public function setModel($m) {
      $this->model = $m;
    }
    
    public function getModel() {
      return $this->model;
    }
    
    public function setYear($y) {
      $this->year = $y;
    }
    
    public function getYear() {
      return $this->year;
    }
    
    public function setMilage($m) {
      $this->milage = $m;
    }
    
    public function getMilage() {
      return $this->milage;
    }
    
    public function setType($t) {
      $this->type = $t;
    }
    
    public function getType() {
      return $this->type;
    }
    
    public function __toString()
    {
      $t = "This " . $this->getType();
      $what = " is a " . $this->getYear() . " " . $this->getMake() . " " . $this->getModel();
      $miles = "It has " . $this->getMilage() . " miles on it.";
      $eng = "It's rocking a " . $this->getEngine() . " engine.";
      return $t . $what . "<br>" . $miles . "<br>" . $eng;
    }
  }
?>

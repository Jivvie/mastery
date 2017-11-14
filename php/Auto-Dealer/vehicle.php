<?php

	class Vehicle {

		/* PRIVATE VARIABLES */
		private $wheelSize;
		private $VIN;
		/* PUBLIC VARIABLES */
		public $color;
		public $hasSeatBelts;

		/* MEMBER FUNCTIONS */
		function setWheelSize($wheelSize) {
			$this -> wheelSize = $wheelSize;
		}

		function getWheelSize(){
			return $this -> wheelSize;
		}

		function setColor($color){
			$this -> color = $color;
		}

		function getColor(){
			return $this -> color;
		}

		function doesHaveSeatBelts(){
			return true;

		}
	}

	$toyota = new Vehicle();
	print_r($toyota);
?>
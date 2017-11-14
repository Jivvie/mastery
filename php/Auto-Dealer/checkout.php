<?php

class CheckoutManager {
	
	/* JUST ONE!! */
	protected static $instance = null;

	/* NOT CONSTRUCTABLE JIVVIE */
	protected function _construct(){

	}

	/* CANNOT BE CLONED JIVVIE */
	protected function _clone(){

	}

	public static function getInstance(){
		if(!isset(static::$instance)) {
			static::$instance = new static;
		}
		return static::$instance;
	}
}

?>
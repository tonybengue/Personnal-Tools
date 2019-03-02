<?php

class Autoloader {
	/**
	* Passe la classe à charger avec sa fonction
	*/
	static function register() {
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}
	/**
	* Charge les fichiers à require du dossier
	*/
	static function autoload($class_name) {
		require 'class/' . $class_name . '.php';
	}
}
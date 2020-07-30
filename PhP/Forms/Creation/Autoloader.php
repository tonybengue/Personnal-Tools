<?php
namespace tools;

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
	static function autoload($class) {
		$class = str_replace(__NAMESPACE__. '\\','', $class);//html
		$class = str_replace('\\', '/', $class);

  		require 'class/' . $class . '.php';
	}
}

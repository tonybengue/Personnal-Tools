<?php
class Debug {
	static function jumpALine($_string) {
		echo $_string.'<br>';
	}

	/**
	 * Debug avec var_dump
	 */
	static function debugDump($pCmd) {
		var_dump($pCmd);
		die();
	}

	/**
	 * Debug avec printR
	 */
	static function debugPrintR($pCmd) {
		echo '<pre>';
		print_r($pCmd);
		echo '</pre>';
		die();
	}

	/**
	 * Debug du type
	 */
	static function debugType($pCmd) {
		echo gettype($pCmd);
		die();
	}
}

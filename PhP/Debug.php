<?php
	class Debug {
		static function debugPresented($toDebug) {
			echo '<pre>';
			print_r($toDebug);
			echo '</pre>';
			die;
		}

		static function jumpALine($_string) {
			echo $_string . "<br>";
		}
	}

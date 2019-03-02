<?php 
	class Debug {
		static function debugPresented($toDebug) {
			echo '<pre>';
			print_r($toDebug);
			echo '</pre>';
			die;
		}
	}	
<?php
	$ipconfig = 'ipconfig /all';
	$netstat = 'netstat -ano';
	$user = 'net view';
	$ping = 'ping -a 8.8.8.8';
	$path = 'dir D:\tonyb\Desktop > D:\tonyb\Desktop\test.txt';

	function execute($pCmd){
		$cmd = shell_exec($pCmd);
		$result_encoded = utf8_encode($cmd);
		echo '<pre>'.$result_encoded.'</pre>';
	}

	execute($netstat);
?>

 
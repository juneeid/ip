<?php

	$ip = $_SERVER["REMOTE_ADDR"];  
	$data = Array(
		"ip" => $ip
	);
	
	$output = json_encode($data, JSON_PRETTY_PRINT);
	echo $output;

?>

<?php 
	//open/create file
	$file = fopen("visitors", "w");
	//new session
	session_start();
	//increment visitor count
	$_SESSION['visitors'] = $_SESSION['visitors'] + 1;
	$count = $_SESSION['visitors'];
	//write it in the file
	fwrite($file, $count);

	$count = file_get_contents("visitors");
	echo "Visitors :".$count;	
?>
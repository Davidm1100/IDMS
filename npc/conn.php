<?php
	$conn = mysqli_connect("localhost", "root", "", "npc");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>

<?php
	require 'conn.php';
 
	if(ISSET($_POST['register'])){
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
		$petbreed = $_POST['petbreed'];
        $petgender = $_POST['petgender'];
        $petcolour = $_POST['petcolour'];
        $petage = $_POST['petage'];

       
 
		mysqli_query($conn, "INSERT INTO `register` VALUES('', '$firstname', '$lastname', '$password', '$address', '$dob', '$petbreed', '$petgender', '$petcolour', '$petage')") or die(mysqli_error());
		echo "<h2>Thank you, $firstname! You and your $petbreed are now registered. </h2> <p>You can now login using your firstname, lastname and password</p>";  
	}
?>
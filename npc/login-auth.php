<?php  
 require('conn.php');

if (isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `register` WHERE ownerFname='$firstname' and OwnerLname='$lastname' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<p>Log in successful!</p>";  

}else{
echo "<p>Log in unsuccessful!</p>";
//echo "Invalid Login Credentials";
}
}
?>
<!DOCTYPE html>
<html lang="en-GB">


<!-- Header-->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Register or signup for an account with us">
    <meta name="keywords" content="register your pet, your vet account">
    <meta name="author" content="Noah's Pet Clinic">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Noah's Pet Clinic - Account</title>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    
</head>


<body>


    <!--Header-->
    <!--Navigation-->

    <div class="topnav" id="myTopnav">
        <div> <a id="logo" href="index.html"><img src="img/header-logo.png" height="100" width="100" alt="The quail garden logo"></a></div>
            <div><h1>Noah's Pet Clinic</h1></div>
            <div class="menu">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="services.html">Services</a>
            <a href="account.php"class="active">Account</a>
            <a href="javascript:void(0);" class="icon" aria-label="Open" onclick="myFunction()">
                <div class="fa fa-bars"></div>
            </a>
         </div>
        </div>

    <!--- Banner section -->
    <div style="background-image:url(img/your-account.jpg);" class="flex-container-banner">
        <div>
            
                <h2>Your Account</h2>
                <p>
                    Login to your account or register your pet with us
                </p>
            </div>
           

        </div>
    
    
    <!--Contact Form-->
  

   
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	

<div class="flexbox-contact">
        <div>
            <h2 id="register">Login Form</h2>
        </div>

        <div>
        <form method="POST" action="login-auth.php">
                <label>Firstname</label>
                <input type="text" class="form-control" name="firstname" required="required"/>
                
                <label>Lastname</label>
                <input type="text" class="form-control" name="lastname" required="required"/>
                
                <label>Password</label>
                <input type="password" class="form-control" maxlength="12" name="password" required="required"/>
                   
                <input class="button1" type="submit" value="Submit" />
                <input class="button2" type="reset" value="Reset"/>
            </form>
        </div>

    </div>

    <?php include 'register.php'?>

    <div class="flexbox-contact">
        <div>
            <h2 id="register">Registration Form</h2>
        </div>

        <div>
        <form method="POST" action="">
                <label>Firstname</label>
                <input type="text" class="form-control" name="firstname" required="required"/>
                
                <label>Lastname</label>
                <input type="text" class="form-control" name="lastname" required="required"/>
                
                <label>Password</label>
                <input type="password" class="form-control" maxlength="12" name="password" required="required"/>
                
                <label>Address</label>
                <input type="text" class="form-control" name="address" required="required"/>
                
                <label>Date of Birth</label>
				<input type="text" class="form-control" name="dob" required="required"/>
               
                <label>Type of Pet</label>
                    <select type="text" class="form-control" name="petbreed" required="required"/>
                        <option value="...">Please choose..</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="horse">Horse</option>
                        <option value="rabbit">Rabbit</option>
                    </select>

                    <label>Pet Gender</label>
                    <select type="text" class="form-control" name="petgender" required="required"/>
                        <option value="...">Please choose..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select> 

                        <label>Pet Colour</label>
					<input type="text" class="form-control" name="petcolour" required="required"/>
               
                
					<label>Pet Age</label>
					<input type="text" class="form-control" name="petage" required="required"/>      

                    <p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
                    <input class="button1" id="register" type="submit" value="Submit" name="register"/>
                <input class="button2" type="reset" value="Reset"/>
            </form>
        </div>

    </div>

    <!--Footer -->
    <footer>
        <div class="flex-container-footer">
            <div>
                <img class="logo" src="img/npc-logo.png" height="200" width="200" alt="NPC Logo">
                
            </div>
        </div>
        
    </footer>

</body>




</html>
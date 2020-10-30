<!DOCTYPE html>
<html lang="en-GB">


<!-- Header-->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Thank you">
    <meta name="keywords" content="quail eggs, quail, free range eggs, sustainable farming">
    <meta name="author" content="The Quail Garden">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/quail_cartoon_trans_PAP_icon.ico">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <title>The Quail Garden - Thank You</title>
</head>

<body>

    <!--Header-->
    <!--Navigation-->

    <div class="topnav" id="myTopnav">
    <div> <a id="logo" href="index.html"><img src="img/header-logo.png" height="100" width="100" alt="NPC Logo"></a></div>
        <div><h1>Noah's Pet Clinic</h1></div>
        <div class="menu">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
        <a href="account.html">Account</a>
        <a href="javascript:void(0);" class="icon" aria-label="Open" onclick="myFunction()">
            <div class="fa fa-bars"></div>
        </a>
     </div>
    </div>


    <!--Introduction-->
    <div class="flex-container-intro">
        <div>

            <h3>Thank you, <?php echo $_POST["firstname"]; ?>! You and your <?php echo $_POST["petbreed"]; ?> are now registered. </h3>
            <p>
            You can now login using your first name, last name and the password you provided. From there you'll be able to manage your account and manage bookings through our swift online appointment system. If you have any issues acsessing your account don't hesitate to contact us on info@noahspetclinic.co.uk or call us on 01332 456789.    
            
            </p>
            
        </div>
        <div> <img src="img/npc-logo-colour.png" alt="NPC Logo"></div>
    </div>

    <div class="flex-container-intro">
        <div>

            <h3>Thank you for signing up <?php echo $_POST["firstname"]; ?>!</h3>
            <p>
                You are now registered on our website. Please login to manage your appointments
            </p>
            
        
        <div> <img src="img/npc-logo.png" width="50" height="50" alt="NPC Logo"></div>
   
    </div>
    </div>

 <!--Footer -->
 <footer>
    <div class="flex-container-footer">
        <div>
            <img class="logo" src="img/Quail_garden_logo_transparent.png" height="70" width="70" alt="The quail garden logo">

        </div>


        <div class="social-icon">
            <a href="http://facebook.com/TheQuailGarden"><img src="img/f_logo_RGB-Blue_58.png" height="25" width="2" alt="The quail garden facebook"></a>
            <a href="http://twitter.com/QuailGarden"><img src="img/Twitter_Social_Icon_Rounded_Square_Color.png" height="25" width="2" alt="The quail garden Twitter"></a>
            <a href="http://instagram.com/thequailgarden/"><img src="img/instagram.png" height="25" width="2" alt="The quail garden Instagram"></a>
            <a href="http://m.me/thequailgarden"><img src="img/fbmessenger.png" height="25" width="2" alt="message the quail garden on messenger"></a>
            <a href="mailto:thequailgarden@gmail.com"><img src="img/mail.png" height="25" width="2" alt="thequailgarden@gmail.com"></a>
            <a href="tel:07450309861"><img src="img/phone.png" height="25" width="2" alt="07450309861"></a>
        </div>
    </div>
</footer>
</body>

</html>
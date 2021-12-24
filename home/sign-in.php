

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/sign-in-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
    </head>
</head>

<body>
    <?php
    include "../includes/header.inc.php";
    ?>
    
    <!--First Section-->
    <section class="main">
        <div class="form-content">
            <h2>Sign In</h2>
            <?php
            include "../includes/signinHandler.inc.php";
            ?>
            <form class="inputs" action="../includes/login.inc.php" method="POST">
                
                <input type="text"  class="just-width" name= "email" placeholder="email@yahoo.com" /><br>
                <input type="password" class="just-width pass1" name= "pass" placeholder="Password" /><br>
                
                <div class="check">
                    <input type="checkbox" id="accept" /><label for="accept" onclick="myFunction()">Show Password</label><br>
                    <p class="already">Have not an account yet?<a href="sign-up.php"><b>Sign Up! </b></a></p>

                </div>
                
                <button type="submit" class="create-btn" name="submit">Enter Account</button>
            </form>
        </div>




    </section>







    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/sign-in.js"></script>
</body>

</html>

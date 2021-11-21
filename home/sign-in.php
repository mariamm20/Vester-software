

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
    </head>
</head>

<body>
    <header>
        <div>
            <h2 class="v"><a href="../home/home.html">Vester&nbsp;Software</a></h2>
        </div>
        <div class="d-flex justify-content-center menu ">
            <i class="fab fa-opencart fa-2x"></i>
            <div class="d-flex justify-content-center" style="height: 43.6px;">
                <span class="cart">Cart</span>
                <span class="cart-number">0</span>
            </div>
            <i class="fas fa-bars fa-2x" style="margin-left: 10px; width: 28px;" onclick="menu()"></i>
        </div>

    </header>
    <!--Menu part-->
    <div class="menu-section" id="menu">
        <ul class="menu-list ">
            <li><a href="../home/home.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="sign-up.php">Sign up</a></li>
            <li><a href="sign-in.php">Sign In</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <!--First Section-->
    <section class="main">
        <div class="form-content">
            <h2>Sign In</h2>
            <form class="inputs" action="../includes/login.inc.php" method="POST">
                
                <input type="text" required class="just-width" name= "email" placeholder="email@yahoo.com" /><br>
                <input type="password" required class="just-width" name= "pass" placeholder="Password" /><br>
                
                <div class="check">
                    <input type="checkbox" id="accept"  /><label for="accept">Show Password</label><br>
                    <p class="already">Have not an account yet?<a href="../sign-up/sign-up.html">Sign Up!</a></p>

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
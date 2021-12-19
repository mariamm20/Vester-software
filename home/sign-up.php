
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/sign-up-style.css" rel="stylesheet" />
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
            <h2>Sign Up</h2>
            <div class="info" style="display:none;">
                <p>
                    <i class="fas fa-info-circle"></i>
                    This email email already exist 
                    
                </p>
            </div>
            <form class="inputs" action="../includes/signup.inc.php" method="POST">
                <div style="padding: 0;margin: 0;">
                    <input type="text" required class="special-width" name="fname" placeholder="First Name" />
                    <input type="text" required class="special-width" name="lname" placeholder="Last Name" />
                </div>
                <input type="email" required class="just-width" name="email" placeholder="email@yahoo.com" /><br>
                <input type="password" required class="just-width" name="pass" placeholder="Password" /><br>
                <input type="password" required class="just-width" name="rpass" placeholder="Enter Password Again" /><br>
               <select class="just-width" id = "countries" name="country"></select><br>
                <input type ="text" required class="just-width" name="num" placeholder="Phone Number"/><br>
                <div class="check">
                    <input type="checkbox" id="accept" required /><label for="accept">Accept all privacy
                        policy</label><br>
                    <input type="checkbox" id="robot" required /><label for="robot">I a person not a robot</label>
                </div>
                <button type="submit" class="create-btn c-btn" name="cacount">Create Account</button>
            </form>
        </div>


        <div class="content">
            <div class="create-btn">Sign Up For Free</div>
            <div>
                <p class="become">Become part of our company</p>
            </div>
            <div class="phrases" style="display: flex; flex-direction: row; justify-content: center;">
                <div class="icons" >
                    <i class="fas fa-check" style="margin-top: 4px;"></i>
                    <i class="fas fa-check"></i>
                    <i class="fas fa-check"></i>
                    <i class="fas fa-check"></i>
                    <i class="fas fa-check"></i>
                </div>
                <div class="words" >
                    <span>Get One Free Software</span>
                    <span>Buy Trusted and Save Software</span>
                    <span>Sell Your Software</span>
                    <span>Get Our Daily Offers</span>
                    <span>Request A Software For<br> Your Company</span>
                </div>

            </div>
            <p class="already">Already have an account?</p>
            <button class="reverse-btn contact-btn" onclick="window.location='sign-in.php';">  <!-- location to sign-in page -->
                Sign In
            </button>







        </div>

    </section>







    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/sign-up.js"></script>
</body>

</html>

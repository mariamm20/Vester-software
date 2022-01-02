<?php
session_start();

// includes
include "../Controllers/db.class.php";
include "../Controllers/WishListContr.class.php";
include "../Views/WishListView.class.php";

$wishlist = new WishListView();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/favicon.ico" />
        <title>Vester Software</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/request-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet" />
    </head>
</head>


<body>
<!--header-->
<?php
            include "../includes/header.inc.php";
?>
  


<!--First Section landing page-->
<section class="land">
    <div class="land-text">
        <p class="intro">Get benifit from new features</p>
        <h2>
            <span class="pick-up">Request A Safe And</span><br>
            <span class="pick-up">Trusty Software For</span><br>
            <span class="pick-up">Your Organization</span>
        </h2>
        <p class="text">
            Know the initial price of the requested
            software <br> and ask it if it is suitable for you .
        </p>
        <button class="shop-btn">
            Start Now
        </button>
    </div>
    <div class="img-div">
        <img src="../img/13.jpg" alt="coding" class="first-img" />
    </div>
</section>
<section>
    <div class="quiz-app">

        <div class="quiz-area"></div>
        <div class="answers-area"></div>

        <div class="btns">
            <button class="prev-button"><i class="fas fa-arrow-left"></i> Previous </button>
            <button class="next-button">Next <i class="fas fa-arrow-right"></i></button>
        </div>

        <div class="quiz-info">
            <div class="category"><i class="fas fa-coins"></i>&nbsp;Application&nbsp;Cost</div>
            <div class="count">$ <span></span></div>
        </div>
            <div class="results">
                <button class="submit-button w-100" id="req" name="sumite">Request</button>
            </div>
    </div>
</section>



<!-- JavaScript -->

<script src="../assests/bootstrap.bundle.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery.fireworks.js"></script>
<script src="js/request.js"></script>
</body>

</html>
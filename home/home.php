<?php
session_start();
 // includes
 include "../Controllers/db.class.php";
 include "../Controllers/WishListContr.class.php";
include "../Views/WishListView.class.php";
 include "../Controllers/homeContr.class.php";
 include "../Views/homeView.class.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/home-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css " rel="stylesheet"/>
        <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />

    </head>
</head>

<body>

    <?php
    include "../includes/header.inc.php";
    ?>
    
    <div class="modal" tabindex="-1" id="start-modal" >
    <div class="modal-dialog modal-dialog-centered">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header start-body">
                <div class="contact-header ">
                    
                    <h4>
                        Our New Features
                    </h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <!--Body-->
            <form class="p-0">
                <div class="modal-body " >

                    <h5 style="line-height: 2em; display: flex;"><i class="far fa-question-circle" style="position: relative;top: 5px;"></i> Try our new feature to calculate the <br>
                        price of your software</h5> 
                        
                        <p style="line-height: 2em;">
                            Very Simple, You must answer a number of question.
                            Then, We calculate Its cost. If it suitable for you, request it!
                        </p>
                    


                </div>
                <!--Footer-->
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="location.href='request.php'" >Start Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
    <!--First Section landing page-->
    <section class="land">
        <div class="land-text" data-aos="fade-right">
            <p class="intro">Indroducing Vester Software</p>
            <h2>
                <span class="pick-up">Pick Up A Save</span><br>
                And Trusty Software
            </h2>
            <p class="text">
                We are here to offer you a simple tools and softwares to simple your life and help you in your work.
                Your work is going
                to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is
                great work. And
                the only way to do great work is to love what you do.
            </p>
            <button class="shop-btn" onclick="location.href='products.php'">
                Shop Now
            </button>
        </div>
        <div class="img-div">
            <img src="../img/1.png" alt="coding" class="first-img" />
        </div>
    </section>
    <!--Second Section About us-->
    <section class="about">

        <div class="image">
            <div class="make-img-center">
                <img src="../img/2.png" alt="vision" class="second-img" />
            </div>
        </div>

        
            <div class="about-text" data-aos="fade-left">
                <p class="intro">About Us</p>
                <h3 class="about-title">
                    ” One day you will wake up and there won’t be any more time to do the things you’ve always wanted.
                    Do it
                    now.”
                </h3>
                <p class="text">
                    We are a team of programmers who seek to a big opportunity to increase the name of their software
                    company by selling
                    trusty and save softwares. Hope you enjoy shopping.
                </p>
                <button class="reverse-btn contact-btn" data-bs-target="#contact" data-bs-toggle="modal">
                    Contact Us
                </button>
            </div>



    </section>
    <!--Third section -->
    <section class="products">
        <p class="intro" style="text-align: center;" data-aos="zoom-in">Get to know to us</p>
        <h2 data-aos="zoom-in">Our Products</h2>
        <div class="main">
            
         <!-- the php code  -->
         <?php
                    
                // make an object fron the view
                    $home = new homeView();

                // call the method to show products
                
                    $home->showProducts();
                ?>



        </div>
        <div class="arrow">
            <a href="products.php">More Products</a>
        </div>
    </section>
    <!--Forth section-->
    <section class="request">
        <div class="land-text req-text" data-aos="fade-right">
            <p class="intro">Get to know new features </p>
            <h2>
                <span class="pick-up-edit">Make a Request for </span><br>
                your company software
            </h2>
            <p class="text">
                We are here to offer you a simple tools and softwares to simple your life and help you in your work.
                Your work is going
                to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is
                great work. And
                the only way to do great work is to love what you do.
            </p>
            <button class="reverse-btn">
                Learn More
            </button>
        </div>
        <div class="shad" style="margin-top: 30px;">

            <div class="make-img-center fixed-image">

            </div>

        </div>
    </section>
    <!--Fifth section-->
    <div style="text-align: center; padding-top: 50px;">
        <p class="intro" data-aos="zoom-in">OUR TESTIMONIALS</p>
        <h2 data-aos="zoom-in">Why They Recommend Us</h2>
    </div>
    <section class="review">

        <div class="backcolor">

        </div>
        <div id="carouselExampleCaptions" class="carousel " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="../img/4.png" class="d-block carousel-image " alt="man"
                        style="width: 100px;height: 100px; ">

                    <div class="stars">
                        <h5>Jack Dawood</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p>
                            ''Awesome website. I bought a software to mange my clinic and it was super simple. <br>
                            Please, Choose yours carefully''
                        </p>
                    </div>

                </div>
                <div class="carousel-item ">

                    <img src="../img/6.png" class="d-block carousel-image " alt="woman">

                    <div class="stars">
                        <h5>Pola Benjamin</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p>
                            '' Great website. I picked a software For my library and it was super easy
                            and simple. <br>I recommend it for you.''
                        </p>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left control"></i>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right control"></i>

            </div>

        </div>

    </section>

    
<?php
    include "../includes/footer.inc.php";
    ?>

    <!-- JavaScript -->
     <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#start-modal').modal('show');
        });
    </script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/home.js"></script>
</body>

</html>

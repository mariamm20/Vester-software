<?php session_start();
 // includes
include "../Controllers/db.class.php";
include "../Controllers/WishListContr.class.php";
include "../Views/WishListView.class.php";
include "../Controllers/ProfileContr.class.php";
include "../Views/ProfileView.class.php";
            $profView = new ProfileView();
if(!isset($_SESSION['id']) ){
    header("location:sign-in.php");
} 
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
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
        <link href="css/profile-style.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assests/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../assests/fontawesome/css/fontawesome.min.css">
    </head>
</head>

<body>

    <!--header-->
        <?php
        include "../includes/header.inc.php";
        ?>

    <div class="whole">
        <?php


            $profView-> showData();
        ?>     
            <div class="info-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#purchased" class="nav-link active" data-bs-toggle="tab">Purchased Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sale" class="nav-link" data-bs-toggle="tab">Products For Sale</a>
                    </li>
                    <li class="nav-item">
                        <a href="#requested" class="nav-link" data-bs-toggle="tab">Requested Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- purchased products -->
                    
                    <?php
                    $profView-> showPurchasedProducts();
                    ?>

                    <!-- products for sale  -->
                    
                    <div class="tab-pane fade" id="sale">
                        <div class="about head-table">
                            <h5>Products For Sale</h5>
                            <div class="line"></div>
                            <button><i class="fas fa-coins"></i> Wallet</button>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                                <?php
                            $profView->showHisProducts();
                                
?>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade train" id="requested">
                        <div class="about head-table">
                            <h5>Requested Products</h5>
                            <div class="line"></div>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                                <?php
                                    $profView->showHisRequestes();
                                ?>
              
                            </tbody>
                        </table>
                    </div>
                <!-- Your Review -->

                <?php

                    $yourReview = new ProfileView();

                    $yourReview-> showYourReview();
                ?>


                </div>
            </div>








        </div>

    </div>

<!--footer-->
<?php
    include "../includes/footer.inc.php";
    ?>




    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>

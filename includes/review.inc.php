<?php
if(isset($_POST['e_review']))
{
    $comment = $_POST["review"];
    $user_id = "" ;
    $product_id  = "";
    $review = "";



    include("../Controllers/db.class.php");
    include("../Controllers/SingleProductContr.class.php");
    include("../Views/SingleProduct.class.php");

    $userReview = new review($user_id, $comment,$product_id, $review); 
    $userReview->userReview();

    
    header("location: ../home/home.php?error=none");
    
}
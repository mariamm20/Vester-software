<?php
session_start();
if(isset($_POST['e_review']))
{
    
    $comment = $_POST["review"];
    $product_id  =  $_POST["product_id"];
    echo $comment;
    echo $product_id;


    include("../Controllers/db.class.php");
    include("../Controllers/SingleProductContr.class.php");
    include("../Views/SingleProduct.class.php");

    $userReview = new review( $comment,$product_id); 
    $userReview->userReview();

    
    header("location: ../home/single-product.php?id=".$product_id );
}
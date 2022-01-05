<?php
session_start();
if(isset($_POST['submit'])){
    echo "1";
        
    $id= $_POST['id'];
    echo "2";

    if(!isset($_SESSION['id'])){
        echo " denied";
    }else{
        
        include("../Controllers/db.class.php");
        include("../Controllers/ProductsContr.class.php");
        include("../Views/ProductsView.class.php");
        echo "4";
        $userSale = new productView(); 
        $userSale->setSale($id);
        echo "done";
    }

}
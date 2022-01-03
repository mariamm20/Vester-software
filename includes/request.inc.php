<?php 
session_start();
if(isset($_POST['action'])){
    
    if (isset($_SESSION['id'])){
        
        $price = $_POST['price'];
        $host =$_POST['host'];
        $type =$_POST['type'];
        $description =$_POST['arr'];
        
        include("../Controllers/db.class.php");
        include("../Controllers/RequestContr.class.php");
        include("../Views/RequestView.class.php");

        $userRequest = new RequestView(); 
        $userRequest->setRequest($host,$price,$description,$type);
        echo "done";
    }else{
        echo "loginFirst";
    }
}

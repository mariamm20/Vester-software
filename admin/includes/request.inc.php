<?php 
if(isset($_GET['accepted'])){
$id = $_GET['accepted'];

// includes
include "../../Controllers/db.class.php";
include "../../Controllers/AdminContr.class.php";
include "../../Views/AdminView.class.php";
// make an object from the view
$contact_us = new AdminView();

$contact_us->acceptedRequest($id);
header("location: ../single-request.php?id=".$id);
 
}

if(isset($_GET['rejected'])){
    $id = $_GET['rejected'];
    
    // includes
    include "../../Controllers/db.class.php";
    include "../../Controllers/AdminContr.class.php";
    include "../../Views/AdminView.class.php";
    // make an object from the view
    $contact_us = new AdminView();
    
    $contact_us->rejectedRequest($id);
    header("location: ../single-request.php?id=".$id);
     
}


if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    
    // includes
    include "../../Controllers/db.class.php";
    include "../../Controllers/AdminContr.class.php";
    include "../../Views/AdminView.class.php";
    // make an object from the view
    $contact_us = new AdminView();
    
    $contact_us->removeRequest($id);
    header("location: ../requests.php");

}
<?php
if(isset($_POST["save"])){
    // Grabbing Data
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $jobTitle = $_POST["jobtitle"];
    $description = $_POST["descr"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $phone = $_POST["phone"];
    $github = $_POST["github"];
    $linkedin = $_POST["linkedin"];
    $twitter = $_POST["twitter"];
    $website =$_POST["website"];
    $photo = $_POST["photo"];
    
    // includes
    include "../Controllers/db.class.php";
    include "../Controllers/Setting.Contr.class.php";
    include "../Views/SettingView.class.php";

    //  make an object of the "Setting" class
    $settingView = new settingView($firstName,$lastName,$jobTitle,$description,$email,$password,$phone,$github,$linkedin,$twitter,$website,$photo); 




}
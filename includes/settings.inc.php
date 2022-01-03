<?php 
session_start();

if(isset($_POST['save_media'])){


    $website =$_POST['website'];
    $github =$_POST['github'];
    $twitter =$_POST['twitter'];
    $linkedin =$_POST['linkedin'];



    include "../Controllers/db.class.php";
    include "../Controllers/Setting.Contr.class.php";
    include "../Views/SettingView.class.php";

    //  make an object of the "Setting" class
    $settingView = new SettingView(); 
    $settingView->mediaUpdate($website ,$github, $twitter,$linkedin);

    header("location: ../home/setting.php");

}
if(isset($_POST['save'])){

    $firstName = trim($_POST["firstname"] , " ");
    $lastName = trim($_POST["lastname"]," ");
    $jobTitle =trim( $_POST["jobtitle"]," ");
    $about = trim($_POST["about"]," ");
    $password = trim($_POST["password"] ," ");
    $phone =trim( $_POST["phone"] ," ");


    include "../Controllers/db.class.php";
    include "../Controllers/Setting.Contr.class.php";
    include "../Views/SettingView.class.php";

    //  make an object of the "Setting" class
    $settingView = new SettingView(); 
    $settingView->UpdateUserData($firstName ,$lastName, $jobTitle,$about,$password,$phone);

    header("location: ../home/setting.php");

}
if(isset($_POST['save_photo'])){
    $photo = $_FILES['photo'];

    include "../Controllers/db.class.php";
    include "../Views/Upload.class.php";
    include "../Controllers/Setting.Contr.class.php";
    include "../Views/SettingView.class.php";

    //  make an object of the "Setting" class
    $settingView = new SettingView(); 
    $settingView->UpdateUserPhoto($photo);

    header("location: ../home/setting.php?donea"); 

}
?>
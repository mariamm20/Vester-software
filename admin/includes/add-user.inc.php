
<?php

if(isset($_POST['add_user']))
    {

        // get the data from the user

        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $rePassword = $_POST['rePassword'];
        $photo = $_FILES['photo'];

        
       
        
        // includes
        include "../../Controllers/db.class.php";
        include "../../Controllers/AdminContr.class.php";
        include "../../Views/AdminView.class.php";


        $add  = new checkUserData($Fname,$Lname,$email,$phone,$photo,$role, $country,$password,$rePassword);
        $add->userSignup();

        header("location: ../add-user.php?AddedSuccefully");
}

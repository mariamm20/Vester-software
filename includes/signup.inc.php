<?php

if(isset($_POST['cacount']))
    {

        // get the data from the user

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $country = $_POST['country'];
        $num = $_POST['num'];
        $rpass = $_POST['rpass'];
        
        
        // includes
        include "../Controllers/db.class.php";
        include "../Controllers/Sign-upContr.class.php";
        include "../Views/Sign-upView.class.php";

        //  make an object of the "Signup" class
        $SignupView = new SignupView($fname, $lname,$email, $pass, $rpass, $country,$num); 

        // running error handlers and user signup
        $SignupView->userSignup();

        // going back to front page 
        header("location: ../home/sign-in.php?error=none");




    }
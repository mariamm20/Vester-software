<?php

if(isset($_POST['submit']))
    {

        // get the data from the user

        $email = $_POST['email'];
       
        $pass = $_POST['pass'];
       
        
        
        // includes
        include "../Controlles/db.class.php";
        include "../Controlles/LoginContr.class.php";
        include "../Views/LoginView.class.php";

        //  make an object of the "Signup" class
        $LoginView = new LoginView($email,$pass); 

        // running error handlers and user signup
        $LoginView->userLogin();

        // going back to front page 
        header("location: ../home/home.php?error=none");




    }
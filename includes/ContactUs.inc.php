<?php

    if(isset($_POST['submit']))
    {

            // get the data from the user

            $name = $_POST['name'];
            $email = $_POST['email'];
            $content = $_POST['content'];
            $phone = $_POST['phone'];
        
            
            echo $name;
            echo $email;
            echo $phone;
            echo $content;
            // includes
            include "../Controllers/db.class.php";
            include "../Controllers/ContactUsContr.class.php";
            include "../Views/ContactUsView.class.php";

            //  make an object of the "ContactUsView" class
            $contact = new ContactUsView(); 

            //call method
            $contact->addContact($name,$email,$content,$phone);

            
            
            // going back to front page 
            header("location: ../home/home.php?contactUsSuccessfully");




    }
?>
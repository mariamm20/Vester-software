<?php

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullurl, "error=takenEmailorPhone")== true)          //error handling for existed email or phone
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This email or phone number is already exist 
            
        </p>
         </div>
    <?php     
    }

    ?>

    <?php
    if (strpos($fullurl, "error=invalidEmail")== true)             // error handling for incorrect email 
                                                                   // مش شغاله عشان في بوب اب بيظهر اصلا
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This email is incorrect
        </p>
         </div>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=emptyinput")== true)             // error handling for impty input
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This field is required 
            
        </p>
         </div>
    <?php     
    }

    ?>
    <?php
    if (strpos($fullurl, "error=passDontMatch")== true)             // error handling for password matching
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            Password and repeat password are not the same 
            
        </p>
         </div>
    <?php     
    }

    ?>

    <?php
    if (strpos($fullurl, "error=InvalidPhoneNumber")== true)             // error handling for Phone number
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            The phone number must be numeric 
        </p>
         </div>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=phoneLength")== true)             // error handling for Phone length
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            Phone number must be 11
        </p>
         </div>
    <?php   
    }
    ?> 
    <?php
    if (strpos($fullurl, "error=invalidFname")== true)             // error handling for first name
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            Only alphabets and whitespace are allowed
        </p>
         </div>
    <?php   
    }
    ?> 

    <?php
    if (strpos($fullurl, "error=invalidLname")== true)             // error handling for last name
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            Only alphabets and whitespace are allowed
        </p>
         </div>
    <?php   
    }
    ?> 
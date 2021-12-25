<?php

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullurl, "error=emptyinput")== true)          //error handling for empty inputs
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            All fields are required 
            
        </p>
         </div>
    <?php     
    }

    if (strpos($fullurl, "error=stmtfailed")== true)          //error handling for failed entering
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            An error has happened!
            
        </p>
        </div>
    <?php     
    }

    if (strpos($fullurl, "error=usernotfound")== true)          //error handling for unsigned user
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This user is not existed,Sign Up!
            
        </p>
        </div>
    <?php     
    }

    if (strpos($fullurl, "error=wrongpassword")== true)          //error handling for wrong password
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This password is invalid
            
        </p>
        </div>
    <?php     
    }



    //-------------------------------------------------
    if (strpos($fullurl, "error=stmt2failed")== true)          //error handling for wrong password
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            An error has happened 
            
        </p>
        </div>
    <?php     
    }


    if (strpos($fullurl, "error=usernotfound2")== true)          //error handling for unsigned user
    {?>
        <div class="info"  >
        <p>
            <i class="fas fa-info-circle"></i>
            This user is not existed,Sign Up!
            
        </p>
        </div>
    <?php     
    }




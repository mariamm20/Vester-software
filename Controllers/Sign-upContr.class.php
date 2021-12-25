<?php
 
class Signup extends Db 
{
    // set the user data
    protected function setUser($fname, $lname, $email, $pass, $country, $num)
    {

        
        $stmt = $this->Connect()->prepare('INSERT INTO users (Fname, Lname, email, password, country, phone, created_at) VALUES (?, ?, ?, ?, ?,?, now()) ;');
        
        
        $hashpass = password_hash($pass, PASSWORD_DEFAULT);

         
        if (!  $stmt->execute(array($fname, $lname, $email, $hashpass, $country,$num)))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/sign-up.php?error=stmtfailed");
            exit();
        }

        $stmt =null;
    
    }

    //-------------------------------------------------------------------------------------------------------


    // check if email  is already existed in the database so, if it exists we don't want to signup this user again

    protected function checkUser($email, $num){

        
        $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE  email = ? OR phone = ? ;');
        // check if it failed 
        if (!  $stmt->execute(array($email, $num))){
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/sign-up.php?error=stmtfailed");
            exit();
        }
        // check if we got any results back in the database
        // check if we have any rows that returned from this query up  
        
        $resultCheck = false;
        if($stmt->rowCount() > 0) // number of errors  
        {
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}





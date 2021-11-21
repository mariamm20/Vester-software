<?php
 
class Login extends Db 
{
    // set the user data
    protected function getUser($email, $pass)
    {
        $hashpass = password_hash($pass, PASSWORD_DEFAULT);
        
        $stmt = $this->Connect()->prepare('SELECT password FROM users WHERE email =? AND password = ?;');
        
        
        

         
        if (!  $stmt->execute(array($email,$hashpass)))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/sign-up.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0)
        {
            echo "wrong password";
            
            header("location: ../home/sign-up.php?error= . $stmt->rowCount() .  " ); 
            exit();
        }

        // 

        $hashedpass = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpass =password_verify($pass,$hashedpass[0]['password'] );

        if($checkpass == false)
        {
            echo "wrong password";
            $stmt = null;
            header("location: ../home/sign-up.php?error=wrongpassword");
            exit();
        }
        elseif($checkpass == true)
        {
            $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE Fname =? OR Lname = ? OR email =? OR phone =? OR country =? AND password = ?;');

            if (!  $stmt->execute(array($email,$pass)))
            {
                $stmt = null;  // if it faild the statement will be closed
                header("location: ../home/sign-up.php?error=stmt2failed");
                exit();
            }

            if($stmt->rowCount()== 0)
        {
            $stmt = null;
            header("location: ../home/sign-up.php?error=usernotfound2");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();

        $_SESSION["email"] = $user[0]["email"];
        $_SESSION["pass"] = $user[0]["password"];
        $stmt = null;


        }

        $stmt =null;
    
    }

    //-------------------------------------------------------------------------------------------------------


  

   
}





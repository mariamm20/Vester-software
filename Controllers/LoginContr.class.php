<?php
 
class Login extends Db 
{
    // set the user data
    protected function getUser($email, $pass)
    {
        
        $stmt = $this->Connect()->prepare('SELECT password FROM users WHERE email =? or phone = ?');
        

         
        if (!$stmt->execute([$email,$email]))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/sign-in.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0)
        {            
            header("location: ../home/sign-in.php?error=usernotfound" ); 
            exit();
        }

        

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
            $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE email =? OR phone =? AND password = ?;');
            
            

            if (!  $stmt->execute(array($email,$email,$pass)))
            {
                $stmt = null;  // if it faild the statement will be closed
                header("location: ../home/sign-in.php?error=stmt2failed");
                exit();
            }

            if($stmt->rowCount()== 0)
            {
                $stmt = null;
                header("location: ../home/sign-in.php?error=usernotfound2");
                exit();
            }
        
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();



            $_SESSION["email"] = $user[0]["email"];
            $_SESSION["id"] = $user[0]["id"];
            $_SESSION['fname'] =$user[0]['Fname'];
            $stmt = null;

            
            $query = "UPDATE users set last_login = now()  where id = ". $_SESSION['id'];
            $stmt= $this->Connect()->query($query);

        }

        $stmt =null;
    
    }

    //-------------------------------------------------------------------------------------------------------


  

   
}





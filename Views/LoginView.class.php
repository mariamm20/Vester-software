<?php


    
    class loginView extends Login {

        
        private $email;
        private $pass;
    
        
        
        // make constructor to equal the properties with the parameters inside the constructor
        public function __construct($email, $pass)
        {
        
            
            $this->pass = $pass;
            $this->email = $email;

            
            
            
            

        }

        //  don't return error لو الكل الفانكشنز اللي تحت دي مشsignup for user  المفروض هعمل فانكشن تعملي 

        public function userLogin()
        {
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../home/sign-up.php?error=emptyinput");
                exit();
            }  


            $this->getUser($this->email,$this->pass);

        }

        //  ----------------  check if there any empty input  -------------------

        private function emptyInput()
        {   
            $result = false; // assign the (value true or false) in it
            
            
            if(empty($this->email) || empty($this->pass) )
            {
                $result = false; 
            }
            else
            {
                $result = true;
            }
            return $result;
        }

       

    }
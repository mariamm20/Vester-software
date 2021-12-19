
<?php


    // inhirit from "Signup" class to use the "checkUser" function  -----   he doesn't do this
    class SignupView extends Signup {

        private $fname;
        private $lname;
        private $email;
        private $pass;
        private $rpass;
        private $country;
        private $num;
        
        
            // make constructor to equal the properties with the parameters inside the constructor
        public function __construct($fname, $lname,$email, $pass,$rpass, $country, $num)
        {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->email = $email;
            $this->pass = $pass;
            $this->rpass = $rpass;
            $this->country = $country;
            $this->num = $num;
            
            
            

        }

        //  don't return error لو الكل الفانكشنز اللي تحت دي مشsignup for user  المفروض هعمل فانكشن تعملي 

        public function userSignup()
        {
            
            if($this->emptyInput() == false)  
            {
                //echo "Empty Input!";
                header("location: ../home/sign-up.php?error=emptyinput");
                exit();
            }  

            if($this->validateFname() == false)  
            {
            
                //echo "Invalid First Name!";
                header("location: ../home/sign-up.php?error=invalidFname");
                exit();
            }  

            if($this->validateLname() == false)  
            {
                //echo "Invalid Last Name!";
                header("location: ../home/sign-up.php?error=invalidLname");
                exit();
            }  

            if($this->validateEmail() == false)  
            {
                
                //echo "Invalid Email!";
                header("location: ../home/sign-up.php?error=invalidEmail");
                exit();
            }  

            if($this->checkEmeilPhone() == false)  
            {
               
                echo "This Email Is Already Taken!";
                header("location: ../home/sign-up.php?error=takenEmailorPhone");
                exit();
            }  

            if($this->validatePhone() == false)  
            {
                //echo "Invalid Phone Number";
                header("location: ../home/sign-up.php?error=InvalidPhoneNumber");
                exit();
            }  
            $this->setUser($this->fname, $this->lname, $this->email,$this->pass,$this->country, $this->num);

        }

        //  ----------------  check if there any empty input  -------------------
       
        private function emptyInput()
        {   
            $result = false; // assign the (value true or false) in it
            
            
            if(empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->pass) ||
            empty($this->country)  || empty($this->num) || empty($this->rpass))
            {
                
                $result = false; 
            }
            else
            {
                $result = true;
            }
            return $result;
        }

        //  --------------------  validate the first name-----------------
        private function validateFname()
        {
            $result = false;
            if(!preg_match("/^[a-zA-z0-9]*$/",$this->fname ))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        // validate the last name
        private function validateLname()
        {
            $result = false;
            if(!preg_match("/^[a-zA-z0-9]*$/",$this->lname))
            {
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }


        // validate email
        private function validateEmail()
        {
            $result = false;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
                $result = false;
            
            }
            else
            {
                $result = true;
            }
            return $result;
        }

        // ------------  checkuser فيها الميثود اللي هي  check المفروض الميثود دي ه 
        // --------------------هو بيتأكد عن طريق الايميل و رقم التليفون 
        private function checkEmeilPhone(){
            $result = false;
            if(!$this->checkUser($this->email,$this->num ))
            {
                echo "Please, fill in every single field in the form...";
                $result = false;
            }
            else
            {
                $result = true;
            }
            return $result;
        }

        // this function to insure that the user will enter just numbers in the phone input

        private function validatePhone()
        {
            $result = false;
           
            if(!is_numeric($this->num))
            {
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;

        
        }
        

        

       

    }
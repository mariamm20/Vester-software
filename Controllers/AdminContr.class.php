<?php

    class AdminContr extends Db{

        
        
        protected function getProducts(){

            $stmt = $this->Connect()->query("
            select p.id,p.price,u.Fname,u.Lname,c.name as category,p.name from products as p 
            join users as u 
                on p.user_id=u.id
            join category as c
                on c.id = p.category_id
            ");
            $data = $stmt->fetchAll();
            return $data;
        }


        protected function setProductContr($name,$description,$price,$category,$discount,$image, $thumbnail, $file){
        
            $query="INSERT INTO products( name, description,price, discound,image,thumbnail,created_at,user_id,category_id, file) 
                VALUES (?,?,?,?,?,?,now(),?,?,?)";
            $stmt = $this->Connect()->prepare($query);

            $check =$stmt->execute([$name,$description,$price,$discount,$image, $thumbnail,$_SESSION["id"],$category, $file]);
        }


        protected function getUsers(){

            $stmt = $this->Connect()->query("
            select id,Fname,Lname,phone,email from  users  
            ");
            $data = $stmt->fetchAll();
            return $data;
        }

        protected function setUserContr($Fname,$Lname,$email,$phone,$photo,$role, $country,$password){
        
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $query="INSERT INTO users( Fname, Lname,email, phone,photo,role,country,password,created_at) 
                VALUES (?,?,?,?,?,?,?,?,now()";
            $stmt = $this->Connect()->prepare($query);

            $check =$stmt->execute([$Fname,$Lname,$email,$phone,$photo, $role,$country, $hashPassword]);
        }



        protected function checkUser($email, $num){

            
            $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE  email = ? OR phone = ? ;');
            // check if it failed 
            if (!  $stmt->execute(array($email, $num))){
                $stmt = null;  // if it faild the statement will be closed
                header("location: ../add-user.php?error=stmtfailed");
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

        protected function deleteProduct($id){
            $stmt = $this->Connect()->prepare( "DELETE FROM products WHERE id= ?");
            $stmt->execute(array($id));
            return $stmt;
        }


        // FEEDBACK CONTROL
        protected function getFeedback()
        {
            $stmt = $this->Connect()->query("SELECT * FROM feedback where review IS NULL ");
            $f_data = $stmt->fetchAll();
            return $f_data;    
            
        }

        protected function acceptFeedback()
        {
            $review = $_GET["review"];
            $id = $_GET["id"];
            $this->Connect()->query("UPDATE feedback SET review = $review WHERE id = $id ");
        }
        protected function rejectFeedback()
        {
            $review = $_GET["review"];
            $id = $_GET["id"];
            $this->Connect()->query("UPDATE feedback SET review = $review WHERE id = $id ");

        }

    

    }
?>

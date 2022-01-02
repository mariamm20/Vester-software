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


        protected function setProductContr($name,$description,$price,$category,
        $discount,$image,$first_thumbnail,$second_thumbnail,$third_thumbnail, $fourth_thumbnail, 
        $file,$support_windows,$support_mac,$support_linux){
        
            $query="INSERT INTO products(name, description,price,discound,image,thumbnail,created_at,user_id,category_id, file,img1,img2,img3,support_windows,support_mac,support_linux) 
                VALUES (?,?,?,?,?,?,now(),?,?,?,?,?,?,?,?,?)";
            $stmt = $this->Connect()->prepare($query);

            $check =$stmt->execute([$name,$description,$price,$discount,$image, $fourth_thumbnail,$_SESSION["id"],$category,
             $file,$first_thumbnail,$second_thumbnail,$third_thumbnail,$support_windows,$support_mac,$support_linux]);
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
                VALUES (?,?,?,?,?,?,?,?,now())";
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
            
        }
        protected function deleteUserContr($id){
            $stmt = $this->Connect()->prepare( "DELETE FROM users WHERE id= ?");
            $stmt->execute(array($id));
       
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

        protected function getCategory(){
            $stmt = $this->Connect()->query("SELECT * FROM category");
            $f_data = $stmt->fetchAll();
            return $f_data;    
        }

        protected function getProduct($id){
            $stmt = $this->Connect()->prepare("SELECT * FROM products where id = ?");
            $stmt->execute([$id]);
            $f_data = $stmt->fetch();
            return $f_data;    
        }
       
        protected function updateProductContr($id,$name,$description,$price,$category,
        $discount,$imageName,$first_thumbnail,$second_thumbnail,$third_thumbnail, 
        $fourth_thumbnail, $fileName,$support_windows,$support_mac,$support_linux){
            $query="UPDATE products SET  name =?, description=?,price=?,discound=? ,image=?,thumbnail=?,category_id=?, file=?,img1=?,img2=?,img3=?,support_windows=?,support_mac=?,support_linux=? where id = ? ";
            $stmt = $this->Connect()->prepare($query);
            $check =$stmt->execute([$name,$description,$price,$discount,$imageName, $fourth_thumbnail,$category,$fileName,$first_thumbnail,$second_thumbnail,$third_thumbnail,$support_windows,$support_mac,$support_linux,$id]);
        }
        protected function getUsersNumber(){
            $stmt = $this->Connect()->prepare("SELECT Count(*) FROM users");
            $stmt->execute();
            $data =$stmt->fetch();
            return $data;
        }
        protected function getProductsNumber(){
            $stmt = $this->Connect()->prepare("SELECT Count(*) FROM products");
            $stmt->execute();
            $data =$stmt->fetch();
            return $data;
        }
        protected function getMaxUsers(){
            $stmt = $this->Connect()->prepare("SELECT max(id) FROM users");
            $stmt->execute();
            $data =$stmt->fetch();
            return $data;
        }

    }
?>

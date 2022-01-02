<?php
session_start();

    class singleContr extends Db{

        protected function getSingleProduct(){
            $id = $_GET["id"];

            $stmt = $this->Connect()->query("SELECT * FROM products WHERE id = $id ");
            $data = $stmt->fetchAll();
            return $data;
        
        }

        protected function getReview()
        {
            $id = $_GET["id"];
            $stmt = $this->Connect()->query("SELECT * from feedback as F join users as s where review = 1  and F.product_id = $id and F.user_id = s.id" );

            $data = $stmt->fetchAll();
            return $data;
        }

        // submit a review on a product
        protected function setReview($user_id, $comment,$product_id, $review)
        {
            $uid = $_SESSION['id'];
            
            $id = $_GET["id"];
            $stmt = $this->Connect()->prepare("INSERT INTO feedback (user_id, content, product_id, review) VALUES ($uid, ?, $id, NULL) " );
            
            if (!  $stmt->execute(array($comment)))
        {
            $stmt = null;  // if it faild the statement will be closed
            header("location: ../home/home.php?error=stmtfailed");
            exit();
        }

        $stmt =null;
            
            
        }
       
        
        
    }

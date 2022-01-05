<?php

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
            $stmt = $this->Connect()->query("SELECT u.Fname,u.Lname,f.content from feedback as F join users as u on u.id = f.user_id  where f.review = 1 and f.product_id = ". $id );

            $data = $stmt->fetchAll();
            return $data;
        }

        // submit a review on a product
        protected function setReview( $comment,$product_id)
        {
            $uid = $_SESSION['id'];
            $stmt = $this->Connect()->prepare("INSERT INTO feedback (user_id, content, product_id, review) VALUES (?, ?, ?, NULL) " );
            $stmt->execute(array($uid,$comment,$product_id));
            
        }
        protected function getSimilarProducts($category)
        {
            $stmt = $this->Connect()->prepare("SELECT * FROM products where category_id = ? ORDER BY id DESC LIMIT 3" );
            $stmt->execute(array($category));    
            $data =$stmt->fetchAll();
            return $data;
        }
        
    }

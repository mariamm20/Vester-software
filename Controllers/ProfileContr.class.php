<?php

    class profileContr extends Db{

        protected function getUserData(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id =' . $_SESSION["id"]);
            $data = $stmt->fetchAll();
            return $data;
        
        }
        
        protected function getPurchasedProducts(){

            $stmt = $this->Connect()->query('SELECT p.id, p.name FROM slaes as s join products as p on s.product_id = p.id WHERE s.user_id =' . $_SESSION["id"]);
            $purchasedProducts = $stmt->fetchAll();
            return $purchasedProducts;
        
        }
        

        
        /*protected function getProductsForSale(){

            $stmt = $this->Connect()->query('SELECT p.id, p.name FROM slaes as s join products as p on s.product_id = p.id WHERE s.user_id =' . $_SESSION["id"]);
            $saleProducts = $stmt->fetchAll();
            return $saleProducts;
        
        }
        */

        protected function getProileReview(){

            $stmt = $this->Connect()->query('SELECT * FROM `feedback` WHERE `review` = 1 AND `user_id` = '. $_SESSION["id"]);
            $yourReview = $stmt->fetchAll();
            return $yourReview;
        
        }

        protected function getHisProducts(){
            $id = $_SESSION['id'];
            $stmt = $this->Connect()->prepare('SELECT * FROM products where user_id= ?');
            $stmt->execute([$id]);
            $data = $stmt->fetchAll();
            return $data;
        
        }
        protected function getHisRequestes(){
            $id = $_SESSION['id'];
            $stmt = $this->Connect()->prepare('SELECT * FROM request where user_id= ?');
            $stmt->execute([$id]);
            $data = $stmt->fetchAll();
            return $data;
        }
    }

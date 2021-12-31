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
        

    }

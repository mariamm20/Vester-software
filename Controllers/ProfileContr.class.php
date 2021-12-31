<?php

    class profileContr extends Db{

        protected function getUserData(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id =' . $_SESSION["id"]);
            $data = $stmt->fetchAll();
            return $data;
        
        }
        
        /*protected function getPurchasedProducts(){

            $stmt = $this->Connect()->query('SELECT * FROM slaes WHERE id =' $_SESSION["id"]);
            $purchasedProducts = $stmt->fetchAll();
            return $purchasedProducts;
        
        }
        */
    }

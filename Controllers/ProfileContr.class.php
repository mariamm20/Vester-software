<?php

    class profileContr extends Db{

        protected function getUserData(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id =' . $_SESSION["id"]);
            $data = $stmt->fetchAll();
            return $data;
        
        }
        
        /* edit the query statement
        protected function getPurchasedProducts(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $purchacedProducts = $stmt->fetchAll();
            return $purchacedProducts;
        
    }

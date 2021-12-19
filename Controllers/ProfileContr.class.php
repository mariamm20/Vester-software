<?php

    class profileCont extends Db{

        protected function getUserData(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $data = $stmt->fetchAll();
            return $data;
        
        }
        /* edit the query statement
        protected function getPurchasedProducts(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $purchacedProducts = $stmt->fetchAll();
            return $purchacedProducts;
        
        }
        //edit the query statement
        protected function getProductsForSale(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $productsForSale = $stmt->fetchAll();
            return $productsForSale;
        
        }

         //edit the query statement
        protected function getRequestedProducts(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $requestedProducts = $stmt->fetchAll();
            return $requestedProducts;
        
        }

         //edit the query statement
        protected function submitComment(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id = $_SESSION["id"]');
            $comment = $stmt->fetchAll();
            return $comment;
        
        }*/
    }

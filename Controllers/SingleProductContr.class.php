<?php

    class singleContr extends Db{

        protected function getSingleProduct(){
            $id = $_GET["id"];

            $stmt = $this->Connect()->query("SELECT * FROM products WHERE id = $id ");
            $data = $stmt->fetchAll();
            return $data;
        
        }
        
    }

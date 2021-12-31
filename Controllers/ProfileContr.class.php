<?php

    class profileContr extends Db{

        protected function getUserData(){

            $stmt = $this->Connect()->query('SELECT * FROM users WHERE id =' . $_SESSION["id"]);
            $data = $stmt->fetchAll();
            return $data;
        
        }
        
        
        
    }

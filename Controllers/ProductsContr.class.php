<?php

class productCont extends Db
{
    protected function getProducts(){
        $stmt = $this->Connect()->query("SELECT * from  products");
        $p_data = $stmt->fetchAll();
        return $p_data;

    }
    protected function getCategories(){
        $stmt = $this->Connect()->query("SELECT * from  Category  ");
        return $stmt;

    }
    protected function GetSearchFilterData($sql){
        $stmt = $this->Connect()->query($sql);
        $p_data = $stmt->fetchAll();
        return $p_data;
    }

}
<?php

class productCont extends Db
{
    protected function getProducts()
    {
        $stmt = $this->Connect()->query("SELECT * from  products");
        $p_data = $stmt->fetchAll();
        return $p_data;


    }
}
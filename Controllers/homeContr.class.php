<?php
class homeCont extends Db
{
    protected function getProducts()
    {
        $stmt = $this->Connect()->query("SELECT * FROM products");
        $p_data = $stmt->fetchAll();
        return $p_data;

    }
}
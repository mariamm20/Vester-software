<?php
class homeCont extends Db
{
    protected function getProducts()
    {
        $stmt = $this->Connect()->query("SELECT * FROM products order by id desc limit 3");
        $p_data = $stmt->fetchAll();
        return $p_data;

    }
}
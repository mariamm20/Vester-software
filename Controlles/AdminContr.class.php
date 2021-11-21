<?php
session_start();

class AdminContr extends Db{

    
    
    protected function getProducts(){

        $stmt = $this->Connect()->query("
        select p.id,p.price,u.Fname,u.Lname,c.name as category,p.name from products as p 
        join users as u 
            on p.users_id=u.id
        join category as c
            on c.id = p.category_id
        ");
        $data = $stmt->fetchAll();
        return $data;
    }


    protected function setProductContr($name,$description,$price,$category,$discount,$image, $thumbnail, $file){
    
        $query="INSERT INTO products( name, description,price, discound,image,thumbnail,create_at,users_id,category_id, file) 
            VALUES (?,?,?,?,?,?,now(),?,?,?)";
        $stmt = $this->Connect()->prepare($query);

        $check =$stmt->execute([$name,$description,$price,$discount,$image, $thumbnail,$_SESSION["id"],$category, $file]);
    }






}
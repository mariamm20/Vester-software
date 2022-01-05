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
    protected function setProductContr($name,$description,$price,$category
        ,$image,$first_thumbnail,$second_thumbnail,$third_thumbnail, $fourth_thumbnail, 
        $file,$support_windows,$support_mac,$support_linux){
        
            $query="INSERT INTO products(name, description,price,image,thumbnail,created_at,user_id,category_id, file,img1,img2,img3,support_windows,support_mac,support_linux) 
                VALUES (?,?,?,?,?,now(),?,?,?,?,?,?,?,?,?)";
            $stmt = $this->Connect()->prepare($query);

            $check =$stmt->execute([$name,$description,$price,$image, $fourth_thumbnail,$_SESSION["id"],$category,
             $file,$first_thumbnail,$second_thumbnail,$third_thumbnail,$support_windows,$support_mac,$support_linux]);
        }
    protected function setSaleContr($id){
        $user=$_SESSION['id'];
        $query = "INSERT Into slaes (user_id,product_id,created_at) values($user,$id,now())";
        $stmt = $this->Connect()->prepare($query);
        $stmt->execute([]);
    }
    protected function getFileName($id){
        $stmt = $this->Connect()->query("SELECT file from products where id = $id ");
        $data =$stmt->fetch();
        return $data;
    }

}
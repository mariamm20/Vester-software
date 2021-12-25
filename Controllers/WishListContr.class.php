
<?php 
    class WishListContr extends Db{

        protected function checkIfItemExist($id){
            $stmt = $this->Connect()->prepare("SELECT * FROM  wishlist where user_id =? and product_id =? ");
            $stmt->execute(array($_SESSION["id"],$id));
            if($stmt->rowCount() == 0){
                return false;
            }else{
                return true;
            }
        }
        protected function addItemDataBase($id){
            $stmt = $this->Connect()->prepare("INSERT INTO wishlist (user_id , product_id) values(?,?)");
            $stmt->execute(array($_SESSION["id"],$id));
            return $stmt;
        }
        
    }
 ?>
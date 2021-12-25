
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
        protected function GetWishList(){
            $stmt = $this->Connect()->prepare("SELECT p.id,p.name,p.price,p.image from products as p join wishlist as w on w.product_id=p.id where w.user_id =?");
            $stmt->execute(array($_SESSION["id"]));
            $data =$stmt->fetchAll();
            return $data;
        }
        protected function deleteItemContr($id){
            $stmt = $this->Connect()->prepare("DELETE from wishlist where user_id=? and product_id= ?");
            $stmt->execute(array($_SESSION["id"],$id));
        }
        
    }
 ?>

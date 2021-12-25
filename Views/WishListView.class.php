
<?php 
    class WishListView extends WishListContr{

        public function addItem($id){
            $check = $this->checkIfItemExist($id);
            if ($check == true){
                header("Location:../home/products.php?check");
                exit();
            }
            $p_data = $this->addItemDataBase($id);
        }
        
        public function showWishList(){
            $data=$this->GetWishList();

           if(count($data)>0){
            foreach($data as $row){
                ?>
                <!--Product-->
                    <div class="wishlist-product">
                            <div class="left">
                                <img src="../uploads/images/<?php echo $row["image"]; ?>"/>
                                <div>
                                    <p><a href="../home/single-product.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></p>
                                    <p>$ <?php echo $row["price"]; ?></p>
                                </div>
                            </div>
                            <div class="right">
                                <a href="../includes/deleteProductWishList.inc.php?id=<?php echo $row["id"]; ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                    </div>
                <?php
            }
           }else{
               ?>
                    <h6 align="center"> you didn't add any products to your wishlist</h6>
                <?php
           }    
        }
        public function deleteItem($id){
             
            $this->deleteItemContr($id);
        }

    }
?>




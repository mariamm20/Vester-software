
<?php 
    class WishListView extends WishListContr{

        public function addItem($id){
            $check = $this->checkIfItemExist($id);
            if ($check == true){
                header("Location:../home/products.php?check=True");
                exit();
            }
            $p_data = $this->addItemDataBase($id);
        }
        public function ShowMessage(){
            if(isset($_GET["check"])){
                ?>
                    <div class="alert alert-warning alert-dismissible" style="margin-top:20px;">
                    <a href="products.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> Product already exist in the WishList
                    </div>
                <?php
            }
            
        }

    }
?>




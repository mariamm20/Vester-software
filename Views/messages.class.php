<?php

    class AlertMessages{


        public function ShowMessage(){
            if(isset($_GET["check"])){
                $this->MessageContent("warning","Product already exist in the WishList","products.php");
            }
            if(isset($_GET["added"])){
                $this->MessageContent("success","Product added successfully to the WishList","products.php");
            }
            if(isset($_GET["removed"])){
                $this->MessageContent("success","Product removed successfully from the WishList","products.php");  
            }
            if(isset($_GET["contactUsSuccessfully"])){
                $this->MessageContent("success","you data has been sent successfully we will contact you soon","home.php");
            }
            if(isset($_GET["AddedSuccefully"])){
                $this->MessageContent("success","you product added successfully","admin.php");
            }
            if(isset($_GET["extensionerror"])){
                $this->MessageContent("error","Allowed extentions are jpg, jpeg, png, rar, zip only ","add-product.php");
            }
            if(isset($_GET["sizeerror"])){
                $this->MessageContent("error"," you can'y upload image larger than 10m or file large than 500m","add-product.php");
            }
            if(isset($_GET["uploaderrors"])){
                $this->MessageContent("error","there is errors in files you uploaded please try again","add-product.php");
            }
            if(isset($_GET["removedSuccessfully"])){
                $this->MessageContent("success","product deleted successfully","all-products.php");
            }
            if(isset($_GET["LoginFirst"])){
                $this->MessageContent("warning","you must be login first <a href='sign-in.php'><strong>Login</strong></a>","products.php");
            }

        }

        private function MessageContent($type,$content,$link){

            if($type=="success"){
                ?>
                    <div class="alert alert-success alert-dismissible"  style="margin-top:10px;">
                        <a href="<?php echo $link;?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo $content;?>
                    </div>
                <?php
            }
            elseif($type=="warning"){
                ?>
                    <div class="alert alert-warning alert-dismissible"  style="margin-top:1px;">
                        <a href="<?php echo $link;?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> <?php echo $content;?>
                    </div>
                <?php
            }
            elseif($type=="error"){
                ?>
                    <div class="alert alert-danger alert-dismissible"  style="margin-top:1px;">
                        <a href="<?php echo $link;?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error</strong> <?php echo $content;?>
                    </div>
                <?php
            }

        }
    }

?>
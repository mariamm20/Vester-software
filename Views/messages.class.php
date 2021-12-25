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

        }

        public function MessageContent($type,$content,$link){

            if($type=="success"){
                ?>
                    <div class="alert alert-success alert-dismissible"  style="margin-top:10px;">
                        <a href="<?php echo $link;?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo $content;?>
                    </div>
                <?php
            }
            if($type=="warning"){
                ?>
                    <div class="alert alert-warning alert-dismissible"  style="margin-top:1px;">
                        <a href="<?php echo $link;?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo $content;?>
                    </div>
                <?php
            }

        }
    }

?>
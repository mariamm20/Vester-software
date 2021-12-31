

<?php
session_start();
if(isset($_POST['add_product']))
    {

        // get the data from the user
        $support_linux =0;
        $support_mac =0;
        $support_windows =0;
        if($_POST['support_linux']){
            $support_linux = $_POST['support_linux'];
        }
        if($_POST['support_mac']){
            $support_mac = $_POST['support_mac'];
        }
        if($_POST['support_windows']){
            $support_windows = $_POST['support_windows'];
        }
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $discount = $_POST['discount'];
        $image = $_FILES['image'];
        $thumbnails = $_FILES['thumbnail'];
        $file = $_FILES['file'];
        
       
       
      
        // includes
        include "../../Controllers/db.class.php";
        include "../../Controllers/AdminContr.class.php";
        include "../../Views/AdminView.class.php";


        $add  = new AdminView();

        $add->setProduct($name,$description,$price,$category,$discount,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux);

        header("location: ../add-product.php?AddedSuccefully");
}
if(isset($_POST['update_product']))
    {
        $id=$_GET['id'];
        // get the data from the user
        $support_linux =0;
        $support_mac =0;
        $support_windows =0;
        if($_POST['support_linux']){
            $support_linux = $_POST['support_linux'];
        }
        if($_POST['support_mac']){
            $support_mac = $_POST['support_mac'];
        }
        if($_POST['support_windows']){
            $support_windows = $_POST['support_windows'];
        }
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $discount = $_POST['discount'];
        $image = $_FILES['image'];
        $thumbnails = $_FILES['thumbnail'];
        $file = $_FILES['file'];
        
       
       
      
        // includes
        include "../../Controllers/db.class.php";
        include "../../Controllers/AdminContr.class.php";
        include "../../Views/AdminView.class.php";


        $add  = new AdminView();

        $add->updateProduct($id,$name,$description,$price,$category,$discount,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux);

        header("location: ../update-product.php?id=".$id."&AddedSuccefully");
}


if(isset($_GET["remove"])){

     
    // includes
    include "../../Controllers/db.class.php";
    include "../../Controllers/AdminContr.class.php";
    include "../../Views/AdminView.class.php";

    $id = $_GET["remove"];
    $remove  = new AdminView();
    $remove->removeProduct($id);

    header("location: ../all-products.php?removedSuccessfully");
}

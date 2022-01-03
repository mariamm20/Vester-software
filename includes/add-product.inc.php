<?php
session_start();
if(isset($_POST['submit']))
    {

        // get the data from the user
        $support_linux =0;
        $support_mac = 0;
        $support_windows =0;
        if(isset($_POST['support_linux'])){
            $support_linux = $_POST['support_linux'];
        }
        if(isset($_POST['support_mac'])){
            $support_mac = $_POST['support_mac'];
        }
        if(isset($_POST['support_windows'])){
            $support_windows = $_POST['support_windows'];
        }
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $image = $_FILES['image'];
        $thumbnails = $_FILES['thumbnail'];
        $file = $_FILES['file'];
       
        
        // includes
        include "../Controllers/db.class.php";
        include "../Controllers/ProductsContr.class.php";
        include "../Views/Upload.class.php";
        include "../Views/ProductsView.class.php";
        //  make object from view class


        $add  = new productView();


        $add->setProduct($name,$description,$price,$category,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux);

        header("location: ../home/add-product.php?uAddedSuccefully");
}

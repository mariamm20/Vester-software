<?php

    if(isset($_GET["remove"])){

     
        // includes
        include "../../Controllers/db.class.php";
        include "../../Controllers/AdminContr.class.php";
        include "../../Views/AdminView.class.php";


        $remove  = new AdminView();
        $remove->removeProduct($id);

        header("location: ../all-products.php?removedSuccessfully");
    }


?>
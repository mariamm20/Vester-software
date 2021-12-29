<?php
      if(isset($_GET["id"]))
      {
          session_start();
          // includes
          include "../Controllers/db.class.php";
          include "../Controllers/WishListContr.class.php";
          include "../Views/WishListView.class.php";
          // make an object from the view
          $wishListView = new WishListView();
  
  
          $wishListView->deleteItem($_GET["id"]);
  
          header("Location:../home/products.php?removed");
      }


?>
<?php
session_start();
 // includes
 include "../Controllers/db.class.php";
 include "../Controllers/WishListContr.class.php";
 include "../Views/WishListView.class.php";
 include "../Controllers/SingleProductContr.class.php";
 include "../Views/SingleProduct.class.php";


 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/single-product-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
    </head>
</head>

<body>
  <div class="modal fade" id="buy-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content change-list">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                <button type="button" class="btn-close btn1" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <form>
                                <div class="modal-body ">
                <h4 class="text-center">Are you sure to  buy it ?</h4><br>
                                </div>
                                <div class="modal-footer">
                
                                    <button type="button" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<?php
    include "../includes/header.inc.php";
    ?>
    
    
    <section class="product-section">
        <!-- method of showing slider product images-->
        <?php
            $single = new singleView();
            $single->showSingleProduct();
        ?>


      









<!--footer-->
    <?php
    include "../includes/footer.inc.php";
    ?>



    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/single-product.js"></script>
</body>

</html>

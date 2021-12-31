<?php
    // includes

    include "includes/header.inc.php";
    include "../Controllers/db.class.php";
    include "../Controllers/AdminContr.class.php";
    include "../Views/AdminView.class.php";
    //  make object from view class
    $AdminView = new AdminView(); 
    $id = $_GET['id'];
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Product <a href="#" onclick="appear()"><i class="fas fa-cog"></i></a></h1>
            <div class="pickColor">
                <p>Change Color</p>
                <ul>
                    <li data-color="#0d6efd" style="background-color: #0d6efd;"> </li>
                    <li data-color="#6c757d" style="background-color: #6c757d;"> </li>
                    <li data-color="#000000" style="background-color: #000000;"> </li>
                    <li data-color="#dc3545" style="background-color: #dc3545;"> </li>
                </ul>
            </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate=""  action="includes/product.inc.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                    <?php 
                    $AdminView->showProduct(9);
                    ?>
                    <br>
                    <br>
                    <br>
                    <button class="w-100 g-12 btn fix text-white btn-lg" style="border-radius: 0;" type="submit" name="update_product">Add Product</button>
                    <br>
                    <br>
                </div>
            </form>
        </div>

<?php
include "includes/footer.inc.php";
?>

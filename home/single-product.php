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

<?php
    include "../includes/header.inc.php";
    ?>
    
    
    <section class="product-section">
        <!-- method of showing slider product images-->
        <?php
            $single = new singleView();
            $single->showSingleProduct();
        ?>

        

    <section class="similar">
        <p class="intro">Get to know to more products</p>
        <h3>People Also Like</h3>
        <div class="caruasel-div">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="pageone">
                            <div class="single-product ">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#"><a href="#">Net Software</a></a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">Net Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                           
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">Net Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="pageone">
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left control"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right control"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>









<!--footer-->
    <?php
    include "../includes/footer.inc.php";
    ?>



    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/single-product.js"></script>
</body>

</html>

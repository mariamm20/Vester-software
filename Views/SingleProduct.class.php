<?php
    class singleView extends singleContr{
        public function showSingleProduct()
        {
            $single_product = $this->getSingleProduct();
            foreach($single_product as $s_product)
            {
            ?>
            <!--Images section on right-->
                <div class="car">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"><img src="<?php echo $product_images["image"] ?>"
                                    class="d-block w-100 small-img" alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"><img src="<?php echo $s_product["image"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"><img src="<?php echo $s_product["image"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"><img src="<?php echo $s_product["image"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"><img src="<?php echo $s_product["image"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                        </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <i class="fas fa-chevron-left control"></i>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <i class="fas fa-chevron-right control"></i>
                    </button>
                </div>
                </div>
        <!--Information Section on Left-->
        <div class="info">
            <div class="inforamtion">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>'" class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $s_product["name"] ?></li>
                    </ol>
                </nav>
                <h1><?php echo $s_product["name"] ?></h1>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="product-price"><?php echo $s_product["price"]?></p>

                <div class="info-content">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active" data-bs-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" class="nav-link" data-bs-toggle="tab">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages" class="nav-link" data-bs-toggle="tab">Traliers</a>
                        </li>
                        <li class="nav-item">
                            <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <h4 class="mt-2">Description</h4>
                            <p class="font-grey ov"><?php echo $s_product["description"]?></p>
                            <h4 class="mt-2">Programming Langauge: <span class="font-grey">C++</span></h4>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to wishlist</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h4 class="mt-2">Features</h4>
                            <ul class="features font-grey">
                                <li>Pdf and universal document reader</li>
                                <li> Write anywhere on documents and notebooks</li>
                                <li>Connect note ideas to another notes</li>
                                <li>View maps of connection</li>
                                <li>Time group collibration (Coming soon)</li>
                                <li>Write anywhere on documents and notebooks</li>
                                <li>Anywhere on documents and notebooks</li>
                                <li>Connect note ideas to another notes</li>

                            </ul>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to wishlist</button>
                            </div>
                        </div>
                        <div class="tab-pane fade train" id="messages">
                            <h4 class="mt-2">Traliers</h4>
                            <p>Get an online training for using this Software.</p>
                            <p>Please fill the following form:</p>
                            <a href="#">wwww.vester-training.com/netsoftware</a>
                            <h5 class="mt-2">Price: <span class="font-grey">10.9$</span></h5>
                            <h5 class="mt-2">Duration: <span class="font-grey">3 hours</span></h5>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to wishlist</button>
                            </div>
                        </div>
                        <div class="tab-pane fade train" id="reviews">
                            <h4 class="mt-2">Reviews</h4>
                            <div class="features">
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Mona
                                        Zakii</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Ahmed
                                        Helmy</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Kareem Abd El Aziz</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                            </div>
                            <form action="" method="">
                                <div class="submit-btn">
                                    <input type="text" placeholder="Write Your Review" name="review" required />
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>
                <?php
            }
            
        }
        
    }

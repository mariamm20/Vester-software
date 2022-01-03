<?php
    class review extends singleContr
    {
        
        private $comment;
        private $product_id ;

        public function __construct( $comment, $product_id) 
        {
            $this->comment = $comment;
            $this->product_id = $product_id;
        }
        public function userReview()
        {
            $this->setReview($this->comment, $this->product_id) ;
        }



    }
    class singleView extends singleContr{


        public function showSingleProduct()
        {
            $single_product = $this->getSingleProduct();
            $review = $this->getReview();
            

            foreach($single_product as $s_product)
            {
            $data = $this->getSimilarProducts($s_product['category_id']);

            ?>
            <!--Images section on right-->
                <div class="car">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"><img src="../uploads/images/<?php echo $s_product["image"] ?>"
                                    class="d-block w-100 small-img" alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"><img src="../uploads/images/<?php echo $s_product["img1"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"><img src="../uploads/images/<?php echo $s_product["img2"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"><img src="../uploads/images/<?php echo $s_product["img3"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"><img src="../uploads/images/<?php echo $s_product["thumbnail"] ?>" class="d-block w-100 small-img"
                                    alt="app img"></button>
                        </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="../uploads/images/<?php echo $s_product["image"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="../uploads/images/<?php echo $s_product["img1"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="../uploads/images/<?php echo $s_product["img2"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="../uploads/images/<?php echo $s_product["img3"] ?>" class="d-block w-100 img" alt="app img">
                        </div>
                        <div class="carousel-item">
                            <img src="../uploads/images/<?php echo $s_product["thumbnail"] ?>" class="d-block w-100 img" alt="app img">
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
                    <h1><?php echo ucfirst($s_product["name"]) ?></h1>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="product-price"><?php echo $s_product["price"]?> $ </p>

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
                            <h4 class="mt-2">Operating System: <span class="font-grey">
                                <?php
                                if($s_product["support_mac"]== 1){
                                    echo "Mac,";
                                }
                                if($s_product["support_linux"]== 1){
                                    echo " Linux,";

                                }
                                if($s_product["support_windows"]== 1){
                                    echo " Windows.";
                                }

                                ?>
                            </span></h4>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button><a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $s_product['id'];}else{echo '?LoginFirst';}?> style="color:white;text-decoration:none !important; ">Add to wishlist</a></button>
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
                            <?php
                            foreach($review as $r)
                            {

                            
                            ?>
                                <div class="p-0 m-0">
                                
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                    
                                       <?php echo $r['Fname'] . " " . $r['Lname'] ;?></p>
                                    
                                    <q> <?php echo $r['content']  ;?></q>
                                    <hr class="p-0">
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <form action="../includes/review.inc.php" class="p-0" method="POST">
                            <div class="submit-btn">
                                <input type="text" placeholder="Write Your Review" required name="review"/>
                                <input type="hidden"  value="<?php echo $s_product["id"] ?>" name="product_id"/>
                                <button name = "e_review">Submit</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>
            </div>

                </section>
                </div>
                
                <section class="similar">
                    <p class="intro">Get to know to more products</p>
                    <h3>People Also Like</h3>
                    <div class="caruasel-div">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="pageone">
                                        <?php
                                        foreach($data as $row){
                                            ?>
                                                <div class="single-product ">
                                                <img src="../uploads/images/<?php echo $row["image"]; ?>" alt="product">
                                                <h5><a href="single-product.php?<?php echo $row["name"]; ?>"><a href="#"><?php echo ucfirst($row["name"])?></a></a></h5>
                                                <div class="rate">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt p-0"></i>
                                                </div>
                                                <div class="d-flex justify-content-between price">
                                                    <div class="price-text">
                                                        <p><?php echo ucfirst($row["price"])?>$</p>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $row['id'];}else{echo '?LoginFirst';}?>> Add to WishList</a>
                                                    </div>
                                                    <div class="cart-icon">
                                                        <a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $row['id'];}else{echo '?LoginFirst';}?>><i class="fab fa-opencart"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }    
                                      ?>
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

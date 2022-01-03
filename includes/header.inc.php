<?php 

include "../Views/messages.class.php";
$message = new AlertMessages();
$message->ShowMessage();

?>

<header>
        <div class=" header-navbar">
            <div>
                <h2 class="v"><a href="home.php">Vester&nbsp;Software</a></h2>
            </div>
            <div class="d-flex justify-content-center menu ">
                <div class="d-flex justify-content-center" style="height: 43.6px; cursor: pointer;" data-bs-target="#wishlist"
                    data-bs-toggle="modal">
                    <span class="cart"><i class="fas fa-plus"></i></span>
                    <span class="cart-number">Wishlist</span>
                </div>
                <!--User Icon-->
                
                <div class="dropdown" <?php if (!isset($_SESSION["id"])){echo 'style="display:none;"';}?>>
                    <i class="fas fa-user-circle fa-2x dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown-item user-name"><?php echo "Hello " . $_SESSION["fname"] . "!"; ?></li>
                        <li>
                            <hr class="dropdown-divider p-0">
                        </li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="sign-out.php">Sign out</a></li>
                    </ul>
                </div>


                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars fa-2x" style=" width: 28px; "></i>
                    
                </button>
            </div>

            

        </div>
        <!--Menu part-->

        <?php
        if (isset($_SESSION["id"]))
        {
        ?>
            <div class="collapse" id="navbarToggleExternalContent">

                <ul class="menu-list ">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="request.php">Request Software</a></li>
                    <li><a href="add-product.php">Add Product</a></li>
                    <li><a href="" data-bs-target="#contact" data-bs-toggle="modal">Contact Us</a></li>
                </ul>

            </div>
        <?php
        }
        else {
        ?>
        <div class="collapse" id="navbarToggleExternalContent" >

        <ul class="menu-list ">
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="request.php">Request Software</a></li>
            <li><a href="sign-up.php">Sign up</a></li>
            <li><a href="sign-in.php">Sign In</a></li>
            <li><a href="" data-bs-target="#contact" data-bs-toggle="modal">Contact Us</a></li>
        </ul>

        </div>

         
        <?php 
        }
        ?>
        <!--Contact Modal-->
        <div class="modal" tabindex="-1" id="contact">
            <div class="modal-dialog">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header header-contact ">
                        <div class="contact-header">
                            <p>Contact Us</p>
                            <h4>
                                GET IN TOUCH
                            </h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <!--Body-->
                    <form class="p-0" action="../includes/ContactUs.inc.php" method="POST">
                        <div class="modal-body">
        
                            <h5>Name</h5>
                            <input type="text" placeholder="John Dawood" required name="name" />
                            <h5>Email</h5>
                            <input type="email" placeholder="user_email@gmail.com" required name="email"  />
                            <h5>Phone Number</h5>
                            <input type="text" placeholder="0123456789" required name="phone"  />
                            <h5>Message</h5>
                            <textarea placeholder="Leave your message here" name="content" ></textarea>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
        
                            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!--Wishlist Modal-->


        <?php
        if (isset($_SESSION["id"]))
        {
        ?>
        <div class="modal" tabindex="-1" id="wishlist">
            <div class="modal-dialog modal-dialog-scrollable">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header header-wishlist ">
                            <div class="contact-header">
                            <p>Make a wish come true</p>
                            <h4>
                                Wishlist
                            </h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <!--Body-->
        
                    <div class="modal-body">
                        <div class="about head-table">
                            <h4>Desired Softwares</h4>
                            <div class="line"></div>
                            <span>( 400 )</span>
                        </div>   
                        <?php 
                            // make an object from the view
                           $wishlistdata = new WishListView();
                           $wishlistdata->showWishList();  
                        ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </header>



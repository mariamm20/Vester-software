<header>
        <div>
            <h2 class="v"><a href="../home/home.html">Vester&nbsp;Software</a></h2>
        </div>
        <div class="d-flex justify-content-center menu ">
            <div class="d-flex justify-content-center" style="height: 43.6px;" data-bs-target="#wishlist"
                data-bs-toggle="modal">
                <span class="cart"><i class="fas fa-plus"></i></span>
                <span class="cart-number">Wishlist</span>
            </div>
            <!--User Icon-->
            
            

             <?php

            
            
                if (isset($_SESSION["id"]))
                {
                    
                    
                ?>
                    <div class="dropdown">
                        <i class="fas fa-user-circle fa-2x dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false"></i>            
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <li class="dropdown-item user-name" > <?php echo "Hello" . " " . $_SESSION["fname"] . "!"; ?></li>
                    
                        <li><hr class="dropdown-divider p-0"></li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#" name= "signout">Sign out</a></li>
                    </ul>
                </div>
                <?php

                }
                else{
                    ?>
                    <div class="dropdown"  style= "display:none;">
                        <i class="fas fa-user-circle fa-2x dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false"></i>            
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <li class="dropdown-item user-name" > </li>
                    
                        <li><hr class="dropdown-divider p-0"></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                <?php    
                }


                ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars fa-2x" style=" width: 28px;"></i>
                    </button>
        </div>

    </header>
<!--Menu part-->
    <div class="collapse" id="navbarToggleExternalContent">
    
        <ul class="menu-list ">
            <li><a href="home.html">Home</a></li>
            <li><a href="../products/products.html">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="../sign-up/sign-up.html">Sign up</a></li>
            <li><a href="../sign-in/sign-in.html">Sign In</a></li>
            <li><a href="#" data-bs-target="#contact" data-bs-toggle="modal">Contact Us</a></li>
        </ul>
    
    </div>
<!--Wishlist Modal-->

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
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <!--Product-->
                    <div class="wishlist-product">
                        <div class="left">
                            <img src="../img/7.jpg" />
                            <div>
                                <p><a href="#">Net Software</a></p>
                                <p>$ 0.00</p>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    
                   


                </div>
            </div>
        </div>
</div>

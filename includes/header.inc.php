<header>
        <div>
            <h2 class="v"><a href="../home/home.html">Vester&nbsp;Software</a></h2>
        </div>
        <div class="d-flex justify-content-center menu ">
            <i class="fab fa-opencart fa-2x"></i>
            <div class="d-flex justify-content-center" style="height: 43.6px;">
                <span class="cart">Cart</span>
                <span class="cart-number">0</span>
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
            <i class="fas fa-bars fa-2x" style=" width: 28px;" onclick="menu()"></i>
        </div>

    </header>
<?php 
 class productView extends productCont
 {
    public function showProducts()
    {
        $p_data = $this->getProducts();

        


        foreach ($p_data as $products)
        {
        ?>
            <div class="main-div">
            <img src="../img/5.jpg" />
            <div class="name-product">
                <h4><?php echo $products['name']; ?></h4> <!-- product name ==> net software -->
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>
                <?php
                $descr = $products['description'];
                $limitedDescr = substr($descr, 0, 100);
                if(strlen($descr) > 100)
                {
                    echo $limitedDescr . '....';  
                
                }else{

                    echo $descr ;  
                }
                ?>
                </p>
                <div class="more-des">
                    <a href="products.php?id=<?php echo $products['id'];  ?>"> more-description  </a> <!--  "product id"-->
                </div>

            </div>

            <div class="d-flex justify-content-between price">
                <div class="price-text">
                    <h5>Price</h5>
                    <p><?php echo $products['price']; ?></p>   <!-- "product price ==> 50$" -->
                </div>
                <div class="add-to-cart"> 

               
                    <a href="products.php?id=<?php echo $products['id'];  ?> "> Add to cart</a>  <!-- product id -->
                </div>
                <div class="cart-icon">
                    <a href="#"><i class="fab fa-opencart fa-2x"></i> </a>
                </div>

            </div>

        </div>
        <?php

        }

    }
 }
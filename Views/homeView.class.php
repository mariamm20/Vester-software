<?php
class homeView extends homeCont
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
                    <h4><?php echo $products['name'] ?></h4>  <!-- software name -->
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>                   <!-- software description -->
                <?php
                $descr = $products['description'];
                $limitedDescr = substr($descr, 0, 30);
                if(strlen($descr) > 30)
                {
                    echo $limitedDescr . '....';  
                
                }else{

                    echo $descr ;  
                }
                ?>  
                </p>
                <div class="more-des">
                <a href="single-product.php?id=<?php echo $products['id'];  ?>"> more-description  </a> <!--  "product id"--> 
                </div>

                </div>

                <div class="d-flex justify-content-between price">
                    <div class="price-text">
                        <h5>Price</h5>
                        <p><?php echo $products['price'] . "$" ?></p>       <!-- software price -->
                    </div>
                    <div class="add-to-cart">
                    <a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $products['id'];}else{echo '?LoginFirst';}?>> Add to WishList </a>  <!-- product id -->
                    </div>
                    <div class="cart-icon">
                        <a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $products['id'];}else{echo '?LoginFirst';}?>><i class="fab fa-opencart fa-2x"></i> </a>
                    </div>
             

                </div>
            </div>

        <?php
        }

    }

}
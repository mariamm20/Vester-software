<?php 
 class productView extends productCont{
    public function showProducts(){
        $p_data = $this->getProducts();
            foreach ($p_data as $products){
            ?>
            <div class="main-div">
                <img src="../uploads/images/<?php echo $products['image'];  ?>" />
                <div class="name-product">
                    <h4><?php echo ucfirst($products['name']); ?></h4> <!-- product name ==> net software -->
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
                    $limitedDescr = substr($descr, 0, 30);
                    if(strlen($descr) > 30)
                    {
                        echo $limitedDescr . ' ....';  
                    
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
                        <p><?php echo $products['price']; ?></p>   <!-- "product price ==> 50$" -->
                    </div>
                    <div class="add-to-cart"> 
                        <a href="../includes/wishlist.inc.php?id=<?php echo $products['id'];  ?> "> Add To WishList</a>  <!-- product id -->
                    </div>
                    <div class="cart-icon">
                        <a href="../includes/wishlist.inc.php?id=<?php echo $products['id'];  ?> "><i class="fab fa-opencart fa-2x"></i> </a>
                    </div>
                </div>
            </div>
            <?php

            }
    }
    public function ShowCategories(){
        $p_data = $this->getCategories();

    
        foreach ($p_data as $category)
        {
        ?>
            <li><input type="checkbox"  class="checkboxClick categoryFilter" value ="<?php echo $category["id"] ?>" /><label>&nbsp;<?php echo $category["name"] ?></label></li>
        <?php
        }
    }
    public function FilterProducts($sql){
        $p_data = $this->GetSearchFilterData($sql);
        $count=count($p_data);

        if($count > 0){
                foreach ($p_data as $products)
                {
                ?>
                <div class="main-div">
                    <img src="../uploads/images/<?php echo $products['image'];  ?>" />
                    <div class="name-product">
                        <h4><?php echo ucfirst($products['name']); ?></h4> <!-- product name ==> net software -->
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
                        $limitedDescr = substr($descr, 0, 30);
                        if(strlen($descr) > 30)
                        {
                            echo $limitedDescr . ' ....';  
                        
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
                            <p><?php echo $products['price']; ?></p>   <!-- "product price ==> 50$" -->
                        </div>
                        <div class="add-to-cart"> 
                            <a href="../includes/wishlist.inc.php?id=<?php echo $products['id'];  ?> "> Add To WishList</a>  <!-- product id -->
                        </div>
                        <div class="cart-icon">
                            <a href="../includes/wishlist.inc.php?id=<?php echo $products['id'];  ?> "><i class="fab fa-opencart fa-2x"></i> </a>
                        </div>
                    </div>
                </div>
                <?php
                }
        }else{
            ?>
                <h3 align="center"> Sorry we can't find products with your filters</h3>'
            <?php
        }
    }
    
 }
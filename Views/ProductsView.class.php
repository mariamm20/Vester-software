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
                        <p><?php echo $products['price'] . "$"; ?></p>   <!-- "product price ==> 50$" -->
                    </div>
                    <div class="add-to-cart"> 
                        <a href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $products['id'];}else{echo '?LoginFirst';}?>> Add To WishList</a>  <!-- product id -->
                    </div>
                    <div class="cart-icon">
                        <a 
                        href=<?php if (isset($_SESSION["id"])){ echo  "../includes/wishlist.inc.php?id=". $products['id'];}else{echo "?LoginFirst";}?>><i class="fab fa-opencart fa-2x"></i> </a>
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
                <h3 align="center"> Sorry we can't find products with your filters</h3>
            <?php
        }
    }
    public function ShowCategoriesOption(){
        $p_data = $this->getCategories();

    
        foreach ($p_data as $category)
        {
        ?>
           <option value ="<?php echo $category['id']?>"><?php echo $category['name']?></option>
        <?php
        }
    }
    public function setProduct($name,$description,$price,$category,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux){
        $imageName =null;
        if(isset($image)){
            $image_obj = new Upload("image",$image,'home/add-product.php?');
            $imageName =$image_obj->save();
        }
        $first_thumbnail = null;
        $second_thumbnail = null;
        $third_thumbnail = null;
        $fourth_thumbnail = null;
  
        for( $i=0 ; $i<count($thumbnails['name']) ; $i++){
            $photo = array(
                "name" => $thumbnails['name'][$i],
                "type"=> $thumbnails['type'][$i],
                "tmp_name"=> $thumbnails['tmp_name'][$i],
                "error"=> $thumbnails['error'][$i],
                "size"=> $thumbnails['size'][$i],
            );
            $thumbnail_obj = new Upload("image",$photo,'home/add-product.php?');
            if($i==0){
                $first_thumbnail = $thumbnail_obj->save();
            }elseif ($i ==1) {
                $second_thumbnail = $thumbnail_obj->save();

            }
            elseif ($i ==2) {
                $third_thumbnail = $thumbnail_obj->save();
            }
            else{
                $fourth_thumbnail = $thumbnail_obj->save();

            }
        }
        $fileName = null;
        if(isset($file)){
            $file_obj = new Upload("file",$file,'home/add-product.php?');
        $fileName =$file_obj->save();
        }


        $this->setProductContr($name,$description,$price,$category,
        $imageName,$first_thumbnail,$second_thumbnail,$third_thumbnail, 
        $fourth_thumbnail, $fileName,$support_windows,$support_mac,$support_linux);
    }
 }
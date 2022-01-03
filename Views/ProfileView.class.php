<?php
    class profileView extends profileContr{
        public function showData()
        {
            $data= $this->getUserData();
            foreach ($data as $userData)
            {
            ?>
            
            <div>
                <div class="pt-0">
                    <img src="../uploads/images/<?php echo $userData["photo"];?>" class="p-0"  alt="profile picture" />
                </div>

                <div class="user-social">
                    <ul>
                        <li>
                            <p><i class="fas fa-globe"></i> Website</p>
                            <a href="https://www.<?php echo $userData["website"]?>.com/"><?php echo $userData["website"]?></a>
                        </li>
                        <li>
                            <p><i class="fab fa-github"></i> Github</p>
                            <a href="https://www.github.com/<?php echo $userData["github"]?>"><?php echo $userData["github"]?></a>
                        </li>
                        <li>
                            <p><i class="fab fa-twitter"></i> Twitter</p>
                            <a href="https://twitter.com/<?php echo $userData["twitter"]?>"><?php echo $userData["twitter"]?></a>
                        </li>
                        <li>
                            <p><i class="fab fa-linkedin"></i> Linkedin</p>
                            <a href="https://www.linkedin.com/in/<?php echo $userData["linkedin"]?>"><?php echo $userData["linkedin"]?></a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="content">
            
            <div class="userName">
                <h4><?php echo $userData["Fname"]." ".$userData["Lname"];?></h4>
                <h5><i class="fas fa-cog"></i><a href="setting.php">Setting</a></h5>
            </div>
            <div class="userRole">
                <p> <?php echo $userData["job_title"];?></p>
            </div>
            <div class="about">
                <h5>About <?php echo $userData["Fname"] . " ".$userData["Lname"];?></h5>
                <div class="line"></div>
                <p>
                    <?php echo $userData["about"];?>
                </p>
            </div>
            <?php
            }
        }


        public function showPurchasedProducts(){
            $purchasedProducts= $this->getPurchasedProducts();
            
                ?>
                <div class="tab-pane fade show active" id="purchased">
                <div class="about head-table">
                    <h5>Purchased Products</h5>
                    <div class="line"></div>
                </div>
                <table class="table table-responsive">
                    <tbody>
                        <?php
                        for($i =0 ;$i<count($purchasedProducts);$i++){
                            ?>
                            <tr>
                            <th scope="row"><?php echo $i+1;?></th>
                            <td class="table-width ov"><?php echo $purchasedProducts[$i]["name"];?></td>
                            <td class="p-0"><a href="single-product.php?id=<?php echo $purchasedProducts[$i]["id"];?>"><button>Open</button></a></td>  
                            </tr>
                        
                        <?php
                      
                        }
                        ?>

                        </atr>

                    </tbody>
                </table>

            </div>
            <?php
            }
        


        public function showYourReview(){
            $yourReview =  $this->getProileReview();
            ?>
            <div class="tab-pane fade train" id="reviews">
            <div class="about head-table">
                <h5>Your Reviews</h5>
                <div class="line"></div>
            </div>
            <table class="table table-responsive">
                <tbody>
                    <thead style="border: 1px solid #ccc;">
                        <tr>
                            <th scope="col" class="left">Submitted Comments</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tr>
                        <?php
                            foreach($yourReview as $yourRev){
                        ?>
                                <th class="table-width comment left" scope="row">
                                    <?php echo $yourRev["content"]?>
                                    <div class="ps-0">
                                        <button class="show-product ps-0"><a href="single-product.php?id=<?php echo $yourRev["product_id"] ?>"><i class="far fa-eye"></i> Show Product</a> </button>
                                    </div>
                                </th>
                                <td class="date"> <?php echo $yourRev["created_at"]?></td>
                        </tr>
            <?php
            }      
            ?>    
                    <!-- <tr>
                        <th class="table-width comment left" scope="row">" This is a good software. I
                            recomment it to you "
                            <div class="ps-0">
                                <button class="show-product ps-0"><i class="far fa-eye"></i> Show comment </button>
                            </div>
                        </th>
                        <td class="date">3/1/2023</td>

                    </tr> -->

                    </tr>

                </tbody>
            </table>
        </div>
        <?php
        }
        public function showHisProducts(){
            $data = $this->getHisProducts();

            for($i=0 ; $i<count($data);$i++){

                ?>
                <tr>
                    <th scope="row"> <?php echo $i+1; ?></th>
                    <td class="table-width ov"><?php echo $data[$i]["name"] ?></td>
                 </tr>
               <?php
            }
        }
        public function showHisRequestes(){
            $data = $this->getHisRequestes();

            for($i=0 ; $i<count($data);$i++){
                ?>  
                            <tr>
                                    <th scope="row"><?php echo $i+1;  ?></th>
                                    <td class="table-width ov"><?php echo $data[$i]["type"] ?></td>
                                    <td class="p-0"> <?php 
                                                if(isset($data[$i]['review'])){
                                                    if($data[$i]['review'] == 1){
                                                        echo "Accepted";
                                                    }else{
                                                        echo "Rejected"; 
                                                    }
                                                } else{
                                                    echo "not reviewed";    
                                                }
                                            ?></td>
                                    <td class="table-width ov"><?php echo  $data[$i]["created_at"] ?></td>

                            </tr>
               <?php
            }
        }
    }
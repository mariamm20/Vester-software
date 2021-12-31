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
                <h4><?php $userData["Fname"]." ".$userData["Lname"];?></h4>
                <h5><i class="fas fa-cog"></i><a href="#">Setting</a></h5>
            </div>
            <div class="userRole">
                <p><?php echo $userData["role"];?></p>
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

    }
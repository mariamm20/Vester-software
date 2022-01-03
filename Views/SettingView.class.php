<?php 
    class settingView extends settingContr{

        public function showUserData(){
            $data = $this->getUserData();
            ?>
             <ul>
                    <li>
                        <p name="website"><i class="fas fa-globe"></i> Website</p>
                        <input type="text" placeholder="https://bootdey.com" required value="<?php echo $data["website"]?>"  name="website"/>
                    </li>
                    <li>
                        <p name="github"><i class="fab fa-github"></i> Github</p>
                        <input type="text" placeholder="bootdey" required name= "github" value="<?php echo $data["github"]?>"  />
                    </li>
                    <li>
                        <p name="twitter"><i class="fab fa-twitter"></i> Twitter</p>
                        <input type="text" placeholder="@bootdey" required name= "twitter" value="<?php echo $data["twitter"]?>"  />
                    </li>
                    <li>
                        <p><i class="fab fa-linkedin"></i> Linkedin</p>
                        <input type="text" placeholder="bootdey" required name= "linkedin" value="<?php echo $data["linkedin"]?>" />
                    </li>
                </ul>
            <?php
        }

        public function mediaUpdate($website ,$github, $twitter,$linkedin){
            $this->mediaUpdateContr($website ,$github, $twitter,$linkedin);
            
        }    
        public function UpdateUserData($firstName ,$lastName, $jobTitle,$about,$password,$phone){
          
            $this->UpdateUserDataContr($firstName ,$lastName, $jobTitle,$about,$password,$phone);
            
        }    
        public function showUserData2(){
            $data = $this->getUserData();
            ?>
             <div class="top">
                <div class="name">
                    <div class="names">
                        <p>First Name</p>
                        <input type="text" placeholder="John" name="firstname" value="<?php echo $data["Fname"];?>" required />
                    </div>
                    <div class="names">
                        <p>Last Name</p>
                        <input type="text" placeholder="Jerry" name="lastname" value="<?php echo $data["Fname"];?>" required />
                    </div>

                </div>

                <div class="standard">
                    <p>Job Title</p>
                    <input type="text" placeholder="Software Engineer" name="jobtitle"value="<?php echo $data["job_title"];?>"  required />
                </div>
                <div class="standard">
                    <p>About</p>
                    <input type="text" placeholder="about you" name="about"value="<?php echo $data["about"];?>"  required />
                </div>
            </div>
            <br>
            <div class="about head-table">
                <h4>Account Setting</h4>
                <div class="line"></div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Email Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>New Email</p>
                    <input type="email" readonly value="<?php echo $data["email"];?>"   />
                </div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Password Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>Old Password</p>
                    <input type="password" placeholder="**********" class="pass1"  required />
                </div>
                <div class="standard">
                    <p>New Password</p>
                    <input type="password" placeholder="**********" class="pass2" name="password" required />
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" onclick="myFunction()">
                        Show Password
                    </label>
                </div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Phone Number Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>Phone Number</p>
                    <input type="text" placeholder="0123456789" name="phone" value="<?php echo $data["phone"];?>"  required />
                </div>
                
            </div>

            <?php
        }

        public function UpdateUserPhoto($photo){
            $image_obj = new Upload("image",$photo,'home/setting.php?');
            $imageName =$image_obj->save();
            $this->UpdateUserPhotoContr($imageName);
        }
        public function showUserPhoto(){
            $data = $this->getUserData();
            ?>
            <img src="../uploads/images/<?php echo   $data['photo'];?>" class="p-0" alt="profile picture" name="photo"/>
            <?php
        }
    }


?>
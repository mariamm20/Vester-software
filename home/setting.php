<?php 
 // includes
 session_start();
 include "../Controllers/db.class.php";
 include "../Controllers/WishListContr.class.php";
 include "../Views/WishListView.class.php";
 include "../Controllers/Setting.Contr.class.php";
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
        <link href="css/setting-style.css" rel="stylesheet" />
    </head>
</head>

<body>
<?php
    include "../includes/header.inc.php";
    ?>
    
    <div class="whole">
        <!--Picture Side-->
        <div>
            <div class="pt-0">
                <img src="../img/6.png" class="p-0" alt="profile picture" name="photo"/>
            </div>
            <div class="change-profile">
                <a href="#" data-bs-target="#change-modal" data-bs-toggle="modal">Change profile picture</a>
            </div>
            <!--Change photo modal-->
            <div class="modal fade" id="change-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content change-list">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Change you profile picture</h5>
                            <button type="button" class="btn-close btn1" data-bs-dismiss="modal" aria-label="Close" >X</button>
                        </div>
                        <form method="post">
                            <div class="modal-body ">
                                
                                    <div class="standard add-image">
                                        <p><i class="far fa-image
                                                        "></i>Choose your picture</p>
                                        <div class="in">
                                            <input type="file" name="uploadfile" id="img"
                                                style="display:none;" onchange="javascript:showoneimg()" />
                                            <label for="img">Browse</label>
                                        </div>


                                    </div>
                                    <div>
                                        <ul id="images">

                                        </ul>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="user-social">
                <ul>
                    <li>
                        <p name="website"><i class="fas fa-globe"></i> Website</p>
                        <input type="text" placeholder="https://bootdey.com" required />
                    </li>
                    <li>
                        <p name="github"><i class="fab fa-github"></i> Github</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                    <li>
                        <p name="twitter"><i class="fab fa-twitter"></i> Twitter</p>
                        <input type="text" placeholder="@bootdey" required />
                    </li>
                    <li>
                        <p><i class="fab fa-instagram"></i> Instagram</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                    <li id="face">
                        <p><i class="fab fa-facebook-f"></i> Facebook</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                </ul>
            </div>
        </div>
        <!--Content Side-->
        <div class="setting">
            <form>
            <div class="about head-table">
                <h4>Edit Profile</h4>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="name">
                    <div class="names">
                        <p>First Name</p>
                        <input type="text" placeholder="John" name="firstname" required />
                    </div>
                    <div class="names">
                        <p>Last Name</p>
                        <input type="text" placeholder="Jerry" name="lastname" required />
                    </div>

                </div>

                <div class="standard">
                    <p>Description</p>
                    <input type="text" placeholder="Software Engineer" name="jobtitle" required />
                </div>
                <div class="standard">
                    <p>About You</p>
                    <input type="text" placeholder="Lorem ipsum dolor sit amet" name="descr" required />
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
                    <input type="email" placeholder="user_mail@gmail.com" name="email" required />
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
                    <input type="password" placeholder="**********" class="pass1" required />
                </div>
                <div class="standard">
                    <p>New Password</p>
                    <input type="password" placeholder="**********" class="pass2" name="pass" required />
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
                    <input type="text" placeholder="0123456789" name="phone" required />
                </div>
                
            </div>
            <br>
            <br>
            <div class="save">
                <button name="save">
                    Save Changes
                </button>
            </div>
</form>
        </div>
            










    </div>
    <!--footer-->
    <?php
    include "../includes/footer.inc.php";
    ?>




    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/setting.js"></script>
</body>

</html>

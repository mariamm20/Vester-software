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
                <img src="../img/6.png" class="p-0" alt="profile picture" />
            </div>
            <div class="change-profile">
                <a href="#">Change profile picture</a>
            </div>
            <div class="user-social">
                <ul>
                    <li>
                        <p><i class="fas fa-globe"></i> Website</p>
                        <input type="text" placeholder="https://bootdey.com" required />
                    </li>
                    <li>
                        <p><i class="fab fa-github"></i> Github</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                    <li>
                        <p><i class="fab fa-twitter"></i> Twitter</p>
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
                        <input type="text" placeholder="John" required />
                    </div>
                    <div class="names">
                        <p>Last Name</p>
                        <input type="text" placeholder="Jerry" required />
                    </div>

                </div>

                <div class="standard">
                    <p>Description</p>
                    <input type="text" placeholder="Software Engineer" required />
                </div>
                <div class="standard">
                    <p>About You</p>
                    <input type="text" placeholder="Lorem ipsum dolor sit amet" required />
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
                    <input type="email" placeholder="user_mail@gmail.com" required />
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
                    <input type="password" placeholder="**********" class="pass2" required />
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
                    <input type="text" placeholder="0123456789" required />
                </div>
                
            </div>
            <br>
            <br>
            <div class="save">
                <button>
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

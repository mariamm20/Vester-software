<?php
session_start(); 
 // includes
 include "../Controllers/db.class.php";
 include "../Controllers/WishListContr.class.php";
 include "../Views/WishListView.class.php";
 include "../Controllers/Setting.Contr.class.php";
 include "../Views/SettingView.class.php";

 $settingViewPage = new SettingView(); 
 if(!isset($_SESSION['id']) ){
    header("location:sign-in.php");
}
        
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
        <link rel="stylesheet" href="../assests/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../assests/fontawesome/css/fontawesome.min.css">
        
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
                <?php $settingViewPage->showUserPhoto()?>
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
                        <form  action="../includes/settings.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body ">
                                    <div class="standard add-image">
                                        <p><i class="far fa-image"></i>Choose your picture</p>
                                        <div class="in">
                                            <input type="file" name="photo" id="img"
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
                                <button type="submit" name ="save_photo" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form action="../includes/settings.inc.php" method= "POST">
            <div class="user-social">
           
                <ul>
                    <?php
                $settingViewPage->showUserData();
                ?>
                </ul>
                <div class="save" style="width:auto">
                <button name="save_media"> Save </button>
                </div>
            </div>
        </form>
        </div>
        <!--Content Side-->
        <div class="setting">
        <form action="../includes/settings.inc.php" method= "POST">
            <div class="about head-table">
                <h4>Edit Profile</h4>
                <div class="line"></div>
            </div>
            <?php
           $settingViewPage->showUserData2();
           ?>
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

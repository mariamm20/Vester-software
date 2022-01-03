<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/add-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
    </head>
</head>

<body>
   
    <?php
    include "../includes/header.inc.php";
    include "../Controllers/db.class.php";
    include "../Controllers/ProductsContr.class.php";
    include "../Views/ProductsView.class.php";
    //  make object from view class
    $addpage = new productView(); 

    ?>

    <div class="whole">
        <div class="side">
            <div class="circle">
                <i class="fas fa-circle c1"></i>
                <i class="fas fa-circle c2"></i>
                <i class="fas fa-circle c3"></i>

            </div>
            <div class="comments">
                <div class="add">
                    <p>
                        Add<br>
                        Software
                    </p>
                </div>
                <div class="add">
                    <p>
                        Sell<br>
                        Software
                    </p>
                </div>
                <div class="add">
                    <p>
                        Earn<br>
                        Money
                    </p>
                </div>
            </div>
        </div>
        <div class="content">
            <form action="../includes/add-product.inc.php" method="POST" enctype="multipart/form-data">
                <div class="about head-table">
                    <h4>Add Your Software</h4>
                    <div class="line"></div>
                </div>
                <div class="top">
                    <div class="standard">
                        <p>Software Name</p>
                        <input type="text" placeholder="ex: Smart calculator" name="name" required />
                    </div>
                </div>
                <div class="top">
                    <div class="standard">
                        <p>Description</p>
                        <textarea placeholder="Descripe your software in brief and mention its features." name="description"
                            required></textarea>
                    </div>
                </div>
                <div class="top">
                    <div class="standard">
                        <p>Software Price</p>
                        <input type="Number" name="price" placeholder="ex: 50$" required />
                    </div>
                </div>
                <div class="top">
                    <div class="standard">
                        <p>Category</p>
                        <select name="category">
                            <option>Select Application</option>
                            <?php 
                                    // call show method
                                     $addpage->ShowCategoriesOption();
                            ?>  
                        </select>
                    </div>
                </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_mac" value="1">Support MAC devices</label>
                            </div>  
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_linux" value="1">Support Linux devices</label>
                            </div>  
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_windows" value="1">Support Windows devices</label>
                            </div> 
                <div class="top">
                    <div class="standard add-image">
                        <p><i class="far fa-image
                            "></i>Add software image</p>
                        <div class="in">
                            <input type="file" accept=".png,.jpg,.jpeg,.gif" name="image" id="img" style="display:none;"
                                onchange="javascript:showoneimg()" />
                            <label for="img">Browse</label>
                        </div>


                    </div>
                    <div>
                        <ul id="images">

                        </ul>
                    </div>
                </div>
                <div class="top">
                    <div class="standard add-image">
                        <p id="sm-font"><i class="far fa-images"></i>Add software thumbnails <span class="warn">( Pick 4
                                images )</span></p>
                        <div class="in">
                            <input type="file" name="thumbnail[]" id="thumbnail" style="display:none;" multiple
                                onchange="javascript:show()" />
                            <label for="thumbnail">Browse</label>
                        </div>

                    </div>
                    <div>
                        <ul id="imgs">

                        </ul>
                    </div>
                </div>
                <div class="top">
                    <div class="standard add-image">
                        <p><i class="far fa-file"></i>Add software file</p>
                        <div class="in">
                            <input type="file" name="file" id="files" style="display:none;" 
                                onchange="javascript:showfile()" />
                            <label for="files">Browse</label>
                        </div>
                    </div>
                    <div>
                        <ul id="softfiles">

                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div class="save">
                    <button type="submit" name="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>

    </div>


    <!--Footer -->
    <?php
    include "../includes/footer.inc.php";
    ?>



    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/add.js"></script>
</body>

</html>
<?php
session_start();
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
        <link href="css/profile-style.css" rel="stylesheet" />
    </head>
</head>

<body>
        <?php
        include "../includes/header.inc.php";
        ?>
    <!--Menu part-->
    <div class="menu-section" id="menu">
        <ul class="menu-list ">
            <li><a href="home.html">Home</a></li>
            <li><a href="../products/products.html">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="../sign-up/sign-up.html">Sign up</a></li>
            <li><a href="../sign-in/sign-in.html">Sign In</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>


    <div class="whole">
        <div>
            <div class="pt-0">
                <img src="../img/6.png" class="p-0"  alt="profile picture" />
            </div>
            <div class="user-social">
                <ul>
                    <li>
                        <p><i class="fas fa-globe"></i> Website</p>
                        <a href="#">https://bootdey.com</a>
                    </li>
                    <li>
                        <p><i class="fab fa-github"></i> Github</p>
                        <a href="#">bootdey</a>
                    </li>
                    <li>
                        <p><i class="fab fa-twitter"></i> Twitter</p>
                        <a href="#">@bootdey</a>
                    </li>
                    <li>
                        <p><i class="fab fa-instagram"></i> Instagram</p>
                        <a href="#">bootdey</a>
                    </li>
                    <li id="face">
                        <p><i class="fab fa-facebook-f"></i> Facebook</p>
                        <a href="#">bootdey</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            
            <div class="userName">
                <h4>Lossy Bootdey</h4>
                <h5><i class="fas fa-cog"></i><a href="#">Setting</a></h5>
            </div>
            <div class="userRole">
                <p>Software Engineer</p>
            </div>
            <div class="about">
                <h5>About Lossy</h5>
                <div class="line"></div>
                <p>
                    Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna
                    praesent at id quisque
                    ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam
                    wisi.
                </p>
            </div>
            <div class="info-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#purchased" class="nav-link active" data-bs-toggle="tab">Purchased Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sale" class="nav-link" data-bs-toggle="tab">Products For Sale</a>
                    </li>
                    <li class="nav-item">
                        <a href="#requested" class="nav-link" data-bs-toggle="tab">Requested Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="purchased">
                        <div class="about head-table">
                            <h5>Purchased Products</h5>
                            <div class="line"></div>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="table-width ov">Net Software</td>
                                    <td class="p-0"><button>Open</button></td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="table-width ov">Kit Software</td>
                                    <td class="p-0"><button>Open</button></td>

                                </tr>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="sale">
                        <div class="about head-table">
                            <h5>Products For Sale</h5>
                            <div class="line"></div>
                            <button><i class="fas fa-coins"></i> Wallet</button>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="table-width-sale ov ">Net Software</td>


                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="table-width ov">Kit Software</td>


                                </tr>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade train" id="requested">
                        <div class="about head-table">
                            <h5>Requested Products</h5>
                            <div class="line"></div>
                        </div>
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="table-width ov">Net Software</td>
                                    <td class="p-0"><button>State</button></td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="table-width ov">Kit Software</td>
                                    <td class="p-0"><button>State</button></td>

                                </tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>
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
                                    <th class="table-width comment left" scope="row">" This is a good software. I
                                        recomment it to you "" This is a good software. I recomment it to you "" This is
                                        a good software. I recomment it to you "" This is a good software. I recomment
                                        it to you "" This is a good software. I recomment it to you "" This is a good
                                        software. I recomment it to you "" This is a good software. I recomment it to
                                        you "
                                        <div class="ps-0">
                                            <button class="show-product ps-0"><i class="far fa-eye"></i> Show comment </button>
                                        </div>
                                    </th>
                                    <td class="date">28/12/2021</td>


                                </tr>
                                <tr>
                                    <th class="table-width comment left" scope="row">" This is a good software. I
                                        recomment it to you "
                                        <div class="ps-0">
                                            <button class="show-product ps-0"><i class="far fa-eye"></i> Show comment </button>
                                        </div>
                                    </th>
                                    <td class="date">3/1/2023</td>

                                </tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>




                </div>
            </div>








        </div>

    </div>
<footer>
    <div class="footer">
        <h6 style="letter-spacing: 4px;">CONTACT US</h6>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <i class="fab fa-facebook-f "></i>
            <i class="fab fa-twitter "></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>
    <span>&copy;All Rights Reserved 2021-2022</span>
</footer>




    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>
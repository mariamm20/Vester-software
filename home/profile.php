<?php session_start();
 // includes
 include "../Controllers/db.class.php";
 include "../Controllers/WishListContr.class.php";
 include "../Views/WishListView.class.php";
 include "../Controllers/ProfileContr.class.php";
include "../Views/ProfileView.class.php";


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
        <link href="css/profile-style.css" rel="stylesheet" />
    </head>
</head>

<body>

    <!--header-->
        <?php
        include "../includes/header.inc.php";
        ?>

    <div class="whole">
        <?php
           

            $profView = new ProfileView();

            $profView-> showData();
        ?>     
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

<!--footer-->
<?php
    include "../includes/footer.inc.php";
    ?>




    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>

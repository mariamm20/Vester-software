<?php
// session_start();
include "../Views/messages.class.php";
$message = new AlertMessages();
$message->ShowMessage();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vester Product</title>
    <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
    <link href="../assests/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="admin.php">Vester Software</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control  w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link text-white px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn align-items-center rounded collapsed">
                                <a href="admin.php" style="color:#212529">Dashboard</a>
                            </button>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                Products
                            </button>
                            <div class="collapse show" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add-product.php" class="link-dark rounded">Add</a></li>
                                    <li><a href="all-products.php" class="link-dark rounded">All</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Users
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="add-user.php" class="link-dark rounded">Add</a></li>
                                    <li><a href="all-users.php" class="link-dark rounded">All</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Catergories
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Add</a></li>
                                    <li><a href="#" class="link-dark rounded">All</a></li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn align-items-center rounded collapsed">
                                <a href="requests.php" style="color:#212529"> Requests</a>
                            </button>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn align-items-center rounded collapsed">
                                <a href="feedback.php" style="color:#212529"> Feedback</a>
                            </button>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn align-items-center rounded collapsed">
                                <a href="contact-us.php" style="color:#212529">Contact Us</a>

                            </button>
                        </li>
                    </ul>
                </div>
            </nav>

          

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/wallet-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../assests/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../assests/fontawesome/css/fontawesome.min.css">
    </head>
</head>
<body>
    <?php
    include "../includes/header.inc.php";
    ?>
    
    <div class="whole">
        <div class="side">
            <img src="../img/11.jpg" />
        </div>
        <div class="content">
            <div class="about head-table">
                <h4>Account Balance</h4>
                <div class="line"></div>
            </div>

            <div class="total">
                <p><i class="fas fa-coins"></i> Total Balance</p>
                <p>$ 0.00</p>
            </div>
            <div class="words">
                <p>
                    You can withraw your money with minimum amount 10$ and It
                    will be added in your paypal wallet within 14 work days.
                </p>
            </div>
            <div class="about head-table">
                <h4>Withraw Money</h4>
                <div class="line"></div>
            </div>
            <form>
                <div class="top">
                    <div class="standard">
                        <p>PayPal Account</p>
                        <input type="Number" placeholder="ex: 12546894444" required />
                    </div>
                </div>
                <div class="top">
                    <div class="standard">
                        <p>Required Amount</p>
                        <input type="Number" placeholder="ex: 50" required />
                    </div>
                </div>
                <br>
                <div class="info">
                    <p>
                        <i class="fas fa-info-circle"></i>
                        If you have problem in submition please
                        <a href="#" data-bs-target="#contact" data-bs-toggle="modal">Contact&nbsp;us</a>
                    </p>
                </div>
                <br>

                <div class="save">
                    <button>
                        Submit
                    </button>
                </div>
            </form>
            <div class="modal" tabindex="-1" id="contact">
                <div class="modal-dialog">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header ">
                            <div class="contact-header">
                                <p>Contact Us</p>
                                <h4>
                                    GET IN TOUCH
                                </h4>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close">X</button>
                        </div>
                        <!--Body-->
                        <div class="modal-body">
                            <form class="p-0">
                                <h5>Name</h5>
                                <input type="text" placeholder="John Dawood" required />
                                <h5>Email</h5>
                                <input type="email" placeholder="user_email@gmail.com" required />
                                <h5>Phone Number</h5>
                                <input type="text" placeholder="0123456789" required />
                                <h5>Message</h5>
                                <textarea placeholder="Leave your message here"></textarea>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>



        </div>





    </div>



















<?php
    include "../includes/footer.inc.php";
    ?>



    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/wallet.js"></script>
</body>

</html>

<?php
include "includes/header.inc.php";
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Feedback <a href="#" onclick="appear()"><i class="fas fa-cog"></i></a></h1>

                    <div class="pickColor">
                        <p>Change Color</p>
                        <ul>
                            <li data-color="#0d6efd" style="background-color: #0d6efd;"> </li>
                            <li data-color="#6c757d" style="background-color: #6c757d;"> </li>
                            <li data-color="#000000" style="background-color: #000000;"> </li>
                            <li data-color="#dc3545" style="background-color: #dc3545;"> </li>
                        </ul>
                    </div>
                </div>
                <div class="container px-4 py-5" id="featured-3">

                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">
                        <div class="feature col">
                            <h3>User 1</h3>
                            <h6>Product id</h6>
                            <p> Your website is fantastic. keep going . God save you.</p>
                            <a href="#accepted" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="#rejected" class="icon-link feed rejected">
                                Reject
                            </a>
                        </div>
                        <div class="feature col">
                            <h3>User 2</h3>
                            <h6>Product id</h6>
                            <p> Your website is fantastic. keep going . God save you.</p>
                            <a href="#accepted" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="#rejected" class="icon-link feed rejected">
                                Reject
                            </a>
                        </div>
                        <div class="feature col">
                            <h3>User 3</h3>
                            <h6>Product id</h6>
                            <p> Your website is fantastic. keep going . God save you.</p>
                            <a href="#accepted" class="icon-link feed accepted">
                                Accept
                            </a>
                            <a href="#rejected" class="icon-link feed rejected ">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>


<?php
include "includes/footer.inc.php";
?>

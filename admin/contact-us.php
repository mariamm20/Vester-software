<?php
include "includes/header.inc.php";
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Contact Us <a href="#" onclick="appear()"><i class="fas fa-cog"></i></a></h1>

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
                <!--Table-->
                <table class="table table-striped table-sm"  id="search-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // includes
                    include "../Controllers/db.class.php";
                    include "../Controllers/AdminContr.class.php";
                    include "../Views/AdminView.class.php";
                // make an object from the view
                    $contact  = new AdminView();

                    $contact->showContactUs();
                        ?>
                    </tbody>
                </table>

            <?php
include "includes/footer.inc.php";
?>

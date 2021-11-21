<?php
include "includes/header.inc.php";
?>

 
                <!--Table-->
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name </th>
                            <th scope="col">Price</th>
                            <th scope="col">Added By</th>
                            <th scope="col">Category</th>
                            <th scope="col">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                                    // includes
                        include "../Controlles/db.class.php";
                        include "../Controlles/AdminContr.class.php";
                        include "../Views/AdminView.class.php";

                        //  make an object of the "Signup" class
                        $AdminView = new AdminView(); 

                        // running error handlers and user signup
                        $AdminView->showProducts();

                    ?>
                       
                    </tbody>
                </table>
<?php

include "includes/footer.inc.php";

?>


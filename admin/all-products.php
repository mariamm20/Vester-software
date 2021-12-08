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
                        include "../Controllers/db.class.php";
                        include "../Controllers/AdminContr.class.php";
                        include "../Views/AdminView.class.php";

                        //  make object from view class
                        $AdminView = new AdminView(); 

                        // call show method
                        $AdminView->showProducts();

                    ?>  
                       
                    </tbody>
                </table>
<?php

include "includes/footer.inc.php";

?>


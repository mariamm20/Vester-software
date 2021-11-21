<?php
include "includes/header.inc.php";
?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add User <a href="#" onclick="appear()"><i class="fas fa-cog"></i></a></h1>
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
                <div class="col-md-7 col-lg-8">

                    <form class="needs-validation" novalidate="">
                        <div class="row g-12">
                            <div class="col-sm-6">
                                <label for="userFirstName" class="form-label"><i class="fas fa-signature"></i>&nbsp;
                                    First name</label>
                                <input type="text" class="form-control " id="userFirstName" placeholder="John" value=""
                                    required="">
                                <div class="invalid-feedback">
                                    Valid user name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="userLastName" class="form-label"><i class="fas fa-signature"></i>&nbsp;
                                    Last name</label>
                                <input type="text" class="form-control " id="userLastName" placeholder="Dawod" value=""
                                    required="">
                                <div class="invalid-feedback">
                                    Valid user name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label"><i class="fas fa-envelope"></i>&nbsp;
                                    Email</label>
                                <input type="email" class="form-control " id="email" placeholder="free@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="numberPhone" class="form-label"><i class="fas fa-phone"></i>&nbsp;
                                    Phone number</label>
                                <input type="number" class="form-control " id="numberPhone" placeholder="+20-1069856">
                                <div class="invalid-feedback">
                                    Please enter a valid number address.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="code" class="form-label"><i class="fas fa-barcode"></i>&nbsp; User
                                    ID</label>
                                <input type="text" class="form-control " id="code" placeholder="13458" required="">
                                <div class="invalid-feedback">
                                    id required
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="date" class="form-label"></label><i class="far fa-calendar-alt"></i>&nbsp;
                                Birth date</label>
                                <input type="date" class="form-control" id="date" placeholder="" required="">
                                <div class="invalid-feedback">
                                    "date required.
                                </div>
                            </div>
                        </div>

                        <br>
                        <button class="w-100 g-12 btn btn-lg fix text-white" style="border-radius: 0;" type="submit">Add
                            User</button>
                        <br>
                        <br>
                </div>




                </form>
        </div>


<?php
include "includes/footer.inc.php";
?>

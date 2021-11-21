<?php
include "includes/header.inc.php";
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add Product <a href="#" onclick="appear()"><i class="fas fa-cog"></i></a></h1>
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
                
                    <form class="needs-validation" novalidate=""  action="includes/add-product.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-12">
                            <div class="col-sm-12">
                                <label for="productName" class="form-label"><i class="fas fa-signature"></i>&nbsp;
                                    Software name</label>
                                <input type="text" class="form-control " id="productName" placeholder="Mongo" value=""
                                    required="" name="name">
                                <div class="invalid-feedback">
                                    Valid product name is required.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label"><i class="fas fa-barcode"></i>&nbsp; Description</label>
                                <textarea class="form-control" id="description" rows="3"  name="description"></textarea>
                                <div class="invalid-feedback">
                                    code required
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="price" class="form-label"><i class="fas fa-dollar-sign"></i> &nbsp;Software
                                    price</label>
                                <input type="number" class="form-control " id="price" placeholder="12$" name="price" required>
                                <div class="invalid-feedback">
                                    Please enter software price.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="discount" class="form-label"><i class="fas fa-dollar-sign"></i> &nbsp;discount</label>
                                <input type="number" class="form-control " id="discount"  name="discount" placeholder="10%" required>
                                <div class="invalid-feedback">
                                    Please enter software discount.
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <label for="Category" class="form-label"><i class="fas fa-layer-group"></i>
                                    &nbsp;Software category</label>
                                <select class="form-select" id="Category" required=""  name="category">
                                    <option value="">Choose...</option>
                                    <option value="1">School</option>
                                    <option value="2">mo</option>
                                    <option value="1">hb</option>
                                    <option>wo</option>
                                    <option>se</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Category.
                                </div>
                            </div>

                            <div class="col-12" style="padding:10px 10px">
                             
                             <label for="image" class="form-label"> choose image for your product </label>
                             <input type="file"  name="image" class="form-control-file" id="image" required>
                             
                            </div>
                            <div class="col-12" style="padding:10px 10px">
                                
                                <label for="thumbnail" class="form-label"> choose image for your product thumbnail </label>
                                <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" required>
                                
                            </div>
                            <div class="col-12" style="padding:10px 10px">
                                <label for="file" class="form-label"> upload product file  </label>
                                <input type="file"  name="file" class="form-control-file" id="file" required>
                                
                            </div>
                            </div>

                            <br>
                            <button class="w-100 g-12 btn fix text-white btn-lg" style="border-radius: 0;" type="submit" name="add_product">Add
                                Product</button>
                            <br>
                            <br>
                        </div>
                    </form>
                </div>

<?php
include "includes/footer.inc.php";
?>

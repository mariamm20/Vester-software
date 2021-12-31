<?php
 // includes

include "includes/header.inc.php";
include "../Controllers/db.class.php";
include "../Controllers/AdminContr.class.php";
include "../Views/AdminView.class.php";
 //  make object from view class
 $AdminView = new AdminView(); 

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
                
                    <form class="needs-validation" novalidate=""  action="includes/product.inc.php" method="POST" enctype="multipart/form-data">
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
                                    <?php 
                                    // call show method
                                    $AdminView->showCategory();
                                    ?>  
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Category.
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_mac" value="1">Support MAC devices</label>
                            </div>  
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_linux" value="1">Support Linux devices</label>
                            </div>  
                            <div class="checkbox">
                                <label><input type="checkbox" name="support_windows" value="1">Support Windows devices</label>
                            </div>  
                            <div class="top">
                            <div class="standard add-image">
                                <p><i class="far fa-image
                                                    "></i> Add software image</p>
                                <div class="in">
                                    <input type="file" name="image" id="img" style="display:none;" onchange="javascript:showoneimg()" />
                                    <label for="img">Browse</label>
                                </div>
                        
                            </div>
                            <div>
                                <ul id="images">
                        
                                </ul>
                            </div>
                        </div>
                        <div class="top">
                            <div class="standard add-image">
                                <p id="sm-font"><i class="far fa-images"></i> Add software thumbnails <span class="warn">( Only 4
                                        images )</span></p>
                                <div class="in">
                                    <input type="file" name="thumbnail[]" id="thumbnail" style="display:none;" multiple
                                        onchange="javascript:show()" />
                                    <label for="thumbnail">Browse</label>
                                </div>
                        
                            </div>
                            <div>
                                <ul id="imgs">
                        
                                </ul>
                            </div>
                        </div>
                        <div class="top">
                            <div class="standard add-image">
                                <p><i class="far fa-file"></i> Add software file</p>
                                <div class="in">
                                    <input type="file" name="file" id="files" style="display:none;" onchange="javascript:showfile()" />
                                    <label for="files">Browse</label>
                                </div>
                            </div>
                            <div>
                                <ul id="softfiles">
                                </ul>
                            </div>
                        </div>
                            <br>
                            <br>
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

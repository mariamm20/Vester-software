 <?php
    // add categories options in add product


class AdminView extends AdminContr{


    public function showProducts() {

        $data = $this->getProducts();
    
        foreach($data as $item){

        ?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['name'];?></td>
                <td><?php echo $item['price'];?></td>
                <td><?php echo $item['Fname'] . " ".  $item['Lname']; ?></td>
                <td><?php echo $item['category'];?></td>
                <td>
                    <a href="update-product.php?id=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-edit"></i></a>
                    &nbsp;
                    <a href="includes/product.inc.php?remove=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr> 

        <?php
        }

    }
     
    public function setProduct($name,$description,$price,$category,$discount,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux){

        $image_obj = new Upload("image",$image,'add-product');
        $imageName =$image_obj->save();
        $first_thumbnail = null;
        $second_thumbnail = null;
        $third_thumbnail = null;
        $fourth_thumbnail = null;
  
        for( $i=0 ; $i<count($thumbnails['name']) ; $i++){
            $photo = array(
                "name" => $thumbnails['name'][$i],
                "type"=> $thumbnails['type'][$i],
                "tmp_name"=> $thumbnails['tmp_name'][$i],
                "error"=> $thumbnails['error'][$i],
                "size"=> $thumbnails['size'][$i],
            );
            $thumbnail_obj = new Upload("image",$photo,'add-product');
            if($i==0){
                $first_thumbnail = $thumbnail_obj->save();
            }elseif ($i ==1) {
                $second_thumbnail = $thumbnail_obj->save();

            }
            elseif ($i ==2) {
                $third_thumbnail = $thumbnail_obj->save();
            }
            else{
                $fourth_thumbnail = $thumbnail_obj->save();

            }
        }

        $file_obj = new Upload("file",$file,'add-product');
        $fileName =$file_obj->save();


        $this->setProductContr($name,$description,$price,$category,
        $discount,$imageName,$first_thumbnail,$second_thumbnail,$third_thumbnail, 
        $fourth_thumbnail, $fileName,$support_windows,$support_mac,$support_linux);
    }


    public function showUsers() {

        $data = $this->getUsers();
    
        foreach($data as $item){

        ?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['Fname'] . " ". $item['Lname']?></td>
            <td><?php echo $item['email']?></td>
            <td><?php echo $item['phone'] ?></td>
            <td>
                <a href="includes\user.inc.php?remove=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr> 

        <?php
        }

    }
    public function addUser($Fname,$Lname,$email,$phone,$photo,$role, $country,$password){
        $imageName = null;
        if($photo['size'] != 0){
            $image_obj = new Upload("image",$photo,'add-user.php&');
        $imageName =$image_obj->save();
        }


        $this->setUserContr($Fname,$Lname,$email,$phone,$imageName,$role, $country,$password);
        echo "done";
    }
    public function removeProduct($id){

        $this->deleteProduct($id);
    }
    public function deleteUser($id){

        $this->deleteUserContr($id);
    }
    public function showCategory(){
        $data = $this->getCategory();
        foreach($data as $row)
        {
            ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
            <?php
        }
    }
    public function showProduct($id){
        $data = $this->getProduct($id);
          ?> 
                <div class="row g-12">
                    <div class="col-sm-12">
                        <label for="productName" class="form-label"><i class="fas fa-signature"></i>&nbsp;
                            Software name</label>
                        <input type="text" class="form-control " id="productName" placeholder="Mongo" value="<?php echo $data["name"];?>"
                            required="" name="name">
                        <div class="invalid-feedback">
                            Valid product name is required.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label"><i class="fas fa-barcode"></i>&nbsp; Description</label>
                        <textarea class="form-control" id="description" rows="3"  name="description" > <?php echo $data["description"];?></textarea>
                        <div class="invalid-feedback">
                            code required
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="price" class="form-label"><i class="fas fa-dollar-sign"></i> &nbsp;Software
                            price</label>
                        <input type="number" class="form-control " value="<?php echo $data["price"];?>" id="price" placeholder="12$" name="price" required>
                        <div class="invalid-feedback">
                            Please enter software price.
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <label for="discount" class="form-label"><i class="fas fa-dollar-sign"></i> &nbsp;discount</label>
                        <input type="number" class="form-control " id="discount"  value="<?php echo $data["discound"];?>"  name="discount" placeholder="10%" required>
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
                            $this->showCategory();
                            ?>  
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Category.
                        </div>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="support_mac" value="1" 
                         <?php  if($data["support_mac"]==1){
                                echo "checked";
                         }
                         ?>
                        >Support MAC devices</label>
                    </div>  
                    <div class="checkbox">
                        <label><input type="checkbox" name="support_linux" value="1"
                        <?php  if($data["support_linux"]==1){
                                echo "checked";
                         }
                         ?>
                        >Support Linux devices</label>
                    </div>  
                    <div class="checkbox">
                        <label><input type="checkbox" name="support_windows" value="1"
                        <?php  if($data["support_windows"]==1){
                                echo "checked";
                         }
                         ?>
                        >Support Windows devices</label>
                    </div>  
                    <div class="top">
                    <div class="standard add-image">
                        <p><i class="far fa-image" ></i> Add software image</p>
                        <div class="in">
                            <input type="file" name="image" id="img" style="display:none;" onchange="javascript:showoneimg()" />
                            <label for="img">Browse</label>
                        </div>
                    </div>
                    <div>
                        <ul id="images">
                            <li><?php echo $data["image"];?></li>
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
                        <ul id="softfiles" > 
                        </ul>
                    </div>
                </div>
            <?php
    }
    public function updateProduct($id,$name,$description,$price,$category,$discount,$image, $thumbnails, $file,$support_windows,$support_mac,$support_linux){
        $data = $this->getProduct($id);
        $fileName = $data["file"];
        $first_thumbnail = $data["thumbnail"];
        $second_thumbnail = $data["img1"];
        $third_thumbnail = $data["img2"];
        $fourth_thumbnail = $data["img3"];
        $imageName = $data["image"];
        echo "234".$imageName;
        
        if($image['size'] != 0){
            $image_obj = new Upload("image",$image,'update-product.php?id='.$id.'&');
            $imageName =$image_obj->save();
            echo "112".$imageName;
        }
        echo "112".$imageName;

        if($thumbnails['size'][0] != 0){
            for( $i=0 ; $i<count($thumbnails['name']) ; $i++){
                $photo = array(
                    "name" => $thumbnails['name'][$i],
                    "type"=> $thumbnails['type'][$i],
                    "tmp_name"=> $thumbnails['tmp_name'][$i],
                    "error"=> $thumbnails['error'][$i],
                    "size"=> $thumbnails['size'][$i],
                );
                $thumbnail_obj = new Upload("image",$photo,'update-product?'.$id.'&');
                if($i==0){
                    $first_thumbnail = $thumbnail_obj->save();
                }elseif ($i ==1) {
                    $second_thumbnail = $thumbnail_obj->save();
                }
                elseif ($i ==2) {
                    $third_thumbnail = $thumbnail_obj->save();
                }
                else{
                    $fourth_thumbnail = $thumbnail_obj->save();
    
                }
            }  
        }        
        if($file['size'] != 0){
            $file_obj = new Upload("file",$file,'update-product.php?id='.$id.'&');
            $fileName =$file_obj->save();
        }
        echo "112".$imageName;
        echo "321".$fileName;

        $this->updateProductContr($id,$name,$description,$price,$category,
        $discount,$imageName,$first_thumbnail,$second_thumbnail,$third_thumbnail, 
        $fourth_thumbnail, $fileName,$support_windows,$support_mac,$support_linux);
    }

}

class  Upload {

    private $type;
    private $fileFinalExt;
    private $fileTmpName;
    private $fileSize;
    private $fileError;
    private $page;
    public function __construct($type, $file,$page){

        $this->page =$page;
        $this->type = $type;
        $this->fileSize =$file['size'];
        $this->fileError =$file['error'];
        $this->fileTmpName =$file['tmp_name'];
        $fileExt = explode(".",$file['name']);
        $fileFinalExt = strtolower(end($fileExt));
        $this->fileFinalExt = $fileFinalExt;
    }
    public function save(){
        if($this->check_Extension()== false){
            header("location: ../".$this->page."extensionerror");
            exit();
        }
        if($this->check_size()== false){
            header("location: ../".$this->page."sizeerror");
            exit();
        }
        if($this->Check_Errors() == false){
            header("location: ../".$this->page."uploaderrors");
            exit();
        }
        $name = $this->move();
        echo "done \n";
        return  $name;
    }

    private function check_Extension( ){
    
        $allowedExt ;
        $result;
        if($this->type === "file"){
            $allowedExt = array('zip','rar');
        }else{
            $allowedExt = array('jpg','jpeg','png');
        }

        if(in_array($this->fileFinalExt,$allowedExt)){
            $result= true;
        }else{
            $result = false;
        }
        return $result;
    }
    private function check_size(){

        $result ;
        if($this->type === "file"){
            // the file must be smaller than 500m
            if($this->fileSize <= 524288000){

                $result = true;
            }else{

                $result = false;

            }
        }else{
            // the file must be smaller than 10m

            if($this->fileSize <= 10485760){

                $result = true;
            }else{

                $result = false;
            }
        }
        return $result;

    }
    private function Check_Errors(){
        $result;
        if($this->fileError == 0){
            $result= true;
        }else{
            $result= false;

        }
        return $result;
    }
    private function move(){
        $fileNewName = uniqid('',false).'.'.$this->fileFinalExt;
       

        if($this->type === "image"){
            $fileDestination = '../../uploads/images/'.$fileNewName;
            move_uploaded_file($this->fileTmpName,$fileDestination);

        }else{
            $fileDestination ='../../uploads/files/'.$fileNewName;
            move_uploaded_file($this->fileTmpName,$fileDestination);
        }
        return $fileNewName;
    }
    


}

class checkUserData extends AdminContr{
    private $fname;
    private $lname;
    private $email;
    private $pass;
    private $rpass;
    private $country;
    private $num;
    private $role;
    private $photo;
    
        // make constructor to equal the properties with the parameters inside the constructor
    public function __construct($Fname,$Lname,$email,$phone,$photo,$role, $country,$password,$rePassword)
    {
        $this->fname = $Fname;
        $this->lname = $Lname;
        $this->email = $email;
        $this->pass = $password;
        $this->rpass = $rePassword;
        $this->country = $country;
        $this->num = $phone;
        $this->role= $role;
        $this->photo = $photo;
           

    }

    //  don't return error لو الكل الفانكشنز اللي تحت دي مشsignup for user  المفروض هعمل فانكشن تعملي 

    public function userSignup()
    {
        if($this->emptyInput() == false)  
        {
            //echo "Empty Input!";
            header("location: ../add-user.php?error=emptyinput");
            exit();
        }  
        echo 1;
        if($this->validateFname() == false)  
        {
            //echo "Invalid First Name!";
            header("location: ../add-user.php?error=invalidFname");
            exit();
        }  
        echo 2;

        if($this->validateLname() == false){
            //echo "Invalid Last Name!";
            header("location: ../add-user.php?error=invalidLname");
            exit();
        }  
        echo 3;

        if($this->validateEmail() == false)  
        {
            //echo "Invalid Email!";
            header("location: ../add-user.php?error=invalidEmail");
            exit();
        }  
        echo 4;

        if($this->checkEmeilPhone() == false)  
        {
            //echo "This Email Is Already Taken!";
            header("location: ../add-user.php?error=takenEmailorPhone");
            exit();
        }  
        echo 5;

        if($this->validatePhone() == false)  
        {
            //echo "Invalid Phone Number";
            header("location: ../add-user.php?error=InvalidPhoneNumber");
            exit();
        }  
        echo 6;

        $add2  = new AdminView();

        $add2->addUser($this->fname,$this->lname,$this->email,$this->num,$this->photo,$this->role, $this->country,$this->pass);
        echo 7;

    }

    //  ----------------  check if there any empty input  -------------------

    private function emptyInput()
    {   
        $result = false; // assign the (value true or false) in it
        
        
        if(empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->pass) ||
        empty($this->country)  || empty($this->num) || empty($this->rpass))
        {
            $result = false; 
            
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    //  --------------------  validate the first name-----------------
    private function validateFname()
    {
        $result = false;
        if(!preg_match("/^[a-zA-z0-9]*$/",$this->fname ))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    // validate the last name
    private function validateLname()
    {
        $result = false;
        if(!preg_match("/^[a-zA-z0-9]*$/",$this->lname))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }


    // validate email
    private function validateEmail()
    {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    // ------------  checkuser فيها الميثود اللي هي  check المفروض الميثود دي ه 
    // --------------------هو بيتأكد عن طريق الايميل و رقم التليفون 
    private function checkEmeilPhone(){
        $result = false;
        if(!$this->checkUser($this->email,$this->num ))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    // this function to insure that the user will enter just numbers in the phone input

    private function validatePhone()
    {
        $result = false;
       
        if(!is_numeric($this->num))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;

    
    }

}

// FEEDBACK
class feedbackView extends AdminContr
{
    public function showFeedback()
    {
        $f_data= $this->getFeedback();


        foreach($f_data as $comments)
        {
            
            
        ?>    
            <div class="feature col">
                <h3><?php echo "USER ID" . " " . $comments['user_id'] ?></h3>  <!-- user id -->
                <h6><?php echo"PRODUCT ID" . " " . $comments['product_id'] ?></h6>   <!-- product id -->
                <p><?php  echo $comments['content'] ?></p> <!-- the comment on the product -->

                <a href="feedback.php?review=1&id=<?php echo $comments['id']; ?>" class="icon-link feed accepted">
                    Accept
                </a>
                <a href="feedback.php?review=0&id=<?php echo $comments['id']; ?>" class="icon-link feed rejected">
                    Reject 
                </a>
            </div> 
            
        <?php    
        
        }
        
       
        if (isset($_GET["review"]) and $_GET["review"] == 1)
        {
              
            $this->acceptFeedback();
            
        }


        if (isset($_GET["review"]) and $_GET["review"] == 0 )
        {
           
            $this->rejectFeedback();

        }
   
        
    }
    


}




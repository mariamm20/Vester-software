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
                    <a href="includes/remove-product.inc.php?remove=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr> 

        <?php
        }

    }
     
    public function setProduct($name,$description,$price,$category,$discount,$image, $thumbnail, $file){

        $image_obj = new Upload("image",$image,'add-product');
        $imageName =$image_obj->save();

        $thumbnail_obj = new Upload("image",$thumbnail,'add-product');
        $thumbnailName = $thumbnail_obj->save();

        $file_obj = new Upload("file",$file,'add-product');
        $fileName =$file_obj->save();


        $this->setProductContr($name,$description,$price,$category,$discount,$imageName,$thumbnailName, $fileName);
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
                <a href="update-product.php/id=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="?remove=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr> 

        <?php
        }

    }
    public function addUser($Fname,$Lname,$email,$phone,$photo,$role, $country,$password){

        $image_obj = new Upload("image",$photo,'add-user');
        $imageName =$image_obj->save();


        $this->setUserContr($Fname,$Lname,$email,$phone,$imageName,$role, $country,$password);
        echo "done";
    }
    public function removeProduct($id){

        $this->deleteProduct($id);
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
            header("location: ../".$this->page.".php?error=extensionerror");
            exit();
        }
        if($this->check_size()== false){
            header("location: ../".$this->page.".php?error=sizeerror");
            exit();
        }
        if($this->Check_Errors() == false){
            header("location: ../".$this->page.".php?error=uploaderrors");
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




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
                <a href="update-product.php/id=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="?remove=<?php echo $item['id'];?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr> 

        <?php
        }

    }
     
    public function setProduct($name,$description,$price,$category,$discount,$image, $thumbnail, $file){

        $image_obj = new Upload("image",$image);
        $imageName =$image_obj->save();

        $thumbnail_obj = new Upload("image",$thumbnail);
        $thumbnailName = $thumbnail_obj->save();

        $file_obj = new Upload("file",$file);
        $fileName =$file_obj->save();


        $this->setProductContr($name,$description,$price,$category,$discount,$imageName,$thumbnailName, $fileName);
    }











}

class  Upload {

    private $type;
    private $fileFinalExt;
    private $fileTmpName;
    private $fileSize;
    private $fileError;

    public function __construct($type, $file){


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
            header("location: ../add-product.php?error=extensionerror");
            exit();
        }
        if($this->check_size()== false){
            header("location: ../add-product.php?error=sizeerror".$this->fileFinalExt);
            exit();
        }
        if($this->Check_Errors() == false){
            header("location: ../add-product.php?error=uploaderrors");
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




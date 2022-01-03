<?php
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
        $fileDestination = '../uploads/images/'.$fileNewName;
        move_uploaded_file($this->fileTmpName,$fileDestination);

    }else{
        $fileDestination ='../uploads/files/'.$fileNewName;
        move_uploaded_file($this->fileTmpName,$fileDestination);
    }
    return $fileNewName;
}



}

?>
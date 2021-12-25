<?php 

    class ContactUsContr extends Db{
        protected function set($name,$email,$content,$phone){

            $stmt = $this->Connect()->prepare("INSERT into contact_us (email,name,phone,description) values (?,?,?,?)");
            $stmt->execute(array($email,$name,$phone,$content));
            return $stmt;
        }


    }
?>
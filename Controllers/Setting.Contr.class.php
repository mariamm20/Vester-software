<?php

    class settingContr extends Db
    {
        // short solution
      
        protected  function mediaUpdateContr($website ,$github, $twitter,$linkedin){
            $stmt = $this->Connect()->prepare('UPDATE `users` SET `github`=?,`twitter`=?,`linkedin`=?,`website`= ? WHERE `id` =?');
            $stmt->execute([$github,$twitter,$linkedin,$website,$_SESSION["id"]]);
        }
        protected  function UpdateUserPhotoContr($photoName){
            $stmt = $this->Connect()->prepare('UPDATE `users` SET `photo`=? WHERE `id` =?');
            $stmt->execute([$photoName,$_SESSION["id"]]);
        }
        protected  function UpdateUserDataContr($firstName ,$lastName, $jobTitle,$about,$password,$phone){
            $hashpass = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->Connect()->prepare('UPDATE users SET Fname=?, Lname=?,phone= ?,password= ?,job_title =?,about=? WHERE `id` =?');
            
            $stmt->execute([$firstName ,$lastName,$phone,$hashpass, $jobTitle,$about,$_SESSION["id"]]);
        }
        protected function getUserData(){
            $stmt = $this->Connect()->prepare('SELECT * from Users where id= ?');
            $stmt->execute([$_SESSION["id"]]);
            $data = $stmt->fetch();
            return $data;
        }
    }
    























    

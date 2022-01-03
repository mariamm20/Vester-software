<?php

    class settingContr extends Db{
        // short solution
        protected function updateProfile(){
            /*if(isset($_POST['save']))
            {
               // the right section 
                $firstName = $_POST['firstname'];
                $lastName = $_POST['lastname'];
                $jobTitle = $_POST['jobtitle'];
                $descr = $_POST['descr'];
                $email = $_POST['email'];
    
                // password used here is "NEW PASSWORD"
                $password = $_POST['pass'];
                $phone = $_POST['phone'];
    
                // the left section
                $photo = $_POST['photo'];
                $website = $_POST['website'];
                $github = $_POST['github'];
                $twitter = $_POST['twitter'];
                $linkedin = $_POST['linkedin'];
    
                $pdoQuery = 'UPDATE users SET firstname=:firstname, lastname=:lastname, 
                            jobtitle=:jobtitle, descr=:descr, email=:email,pass=:pass,
                            phone=:phone, photo=:photo, website=:website, github=:github
                            twitter=:twitter, linkedin=:linkedin WHERE id=' . $_SESSION["id"]
    
                $pdoQuery_run = $pdo->prepare($pdoQuery);
                $pdoQuery_exec = $pdoQuery_run->execute(array(":firstname"=>firstname,":lastname"=>lastname,":jobtitle"=>jobtitle,
                ":descr"=>descr, ":email"=>email,":pass"=>pass,":phone"=>phone,":photo"=>photo,":website"=>website,
                ":github"=>github,":twitter"=>twitter,":linkedin"=>linkedin))
    
                if($pdoQuery_exec)
                {
                    echo '<script>alert(Data Updated Successfully)</script>';
                }else
                {
                    echo '<script>alert(Data Not Updated )</script>';
                }
        }*/

        $stmt = $this->Connect()->query('UPDATE `users` SET `Fname`= firstname,`Lname`= lastname,
        `email`= email,`phone`= phone,`password`= pass,`github`=github,`twitter`=twitter,
        `linkedin`=linkedin,`website`= website WHERE `id`' . = $_SESSION["id"]);
        $updateProfile = $stmt->fetchAll();
        return $updateProfile;
    
        }























    }

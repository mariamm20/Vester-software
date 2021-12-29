<?php
    class ContactUsView extends ContactUsContr{


        public function addContact($name,$email,$content,$phone){

            $this->set($name,$email,$content,$phone);


        }
    }












?>
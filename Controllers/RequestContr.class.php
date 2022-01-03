<?php

class RequestContr extends Db{

    protected function setRequestContr($host,$price,$description,$type){

        $stmt = $this->Connect()->prepare('INSERT INTO  `request`(`description`, `type`, host, user_id,created_at) VALUES (?,?,?,?,now())');
        $stmt->execute([$description,$type,$host,$_SESSION["id"]]);
    }




}
<?php 

// connection with data base

class Db {
    private $host ="localhost";
    private $user = "root" ;
    private $pwd ="";
    private $dbname ="vester_software" ;

    protected function  Connect(){
        $dns = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $pdo = new PDO($dns,$this->user,$this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo ;
    }


} 


// signup class ==> controls
//signuo control ==>view

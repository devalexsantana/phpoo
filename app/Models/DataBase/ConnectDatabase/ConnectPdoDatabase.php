<?php

namespace App\Models\DataBase\ConnectDatabase;
use App\Interfaces\InterfaceConnectDatabase;
use PDO;

class ConnectPdoDatabase implements InterfaceConnectDatabase{

    private $pdo;

    public function __construct(){
        
        $this->pdo = new PDO("mysql:host=localhost:3306;dbname=vendaonline", "root", "");    
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function ConnectDatabase(){
        return $this->pdo;
    }


}
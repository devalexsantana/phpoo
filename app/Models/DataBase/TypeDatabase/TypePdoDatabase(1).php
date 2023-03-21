<?php

namespace App\Model\DataBase\TypeDatabase;

use App\Interfaces\InterfaceTypeDatabase;
use App\Model\DataBase\ConnectDatabase\Connection;
use App\Model\DataBase\ConnectDatabase\ConnectPdoDatabase;

class TypePdoDatabase implements InterfaceTypeDatabase{
    
    /**
     * Declaração da variavel PDO
     *
     * @var object  $pdo
     */
    private  $pdo;
    private $objPdo;

    public function __construct(){

        $pdo = new Connection( new ConnectPdoDatabase);

        $this->pdo = $pdo->ConnectDatabase();
        
    }



    public function prepare($sql){
        $this->objPdo = $this->pdo->prepare($sql);
    }
    public function bindValue($key, $value){

        $this->objPdo->bindvalue($key, $value);

    }
    public function execute(){
        $this->objPdo->execute();

    }
    public function rowCount(){
        return $this->objPdo->rowCount();

    }
    public function fetch(){
        return $this->objPdo->fetch();

    }

    public function fetchAll(){
        return $this->objPdo->fetchAll();

    }
}
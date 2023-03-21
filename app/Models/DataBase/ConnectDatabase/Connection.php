<?php

namespace App\Models\DataBase\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;

class Connection{
    private $interfaceConnectDatabase;


    public function __construct(InterfaceConnectDatabase $interfaceConnectDatabase){

        $this->interfaceConnectDatabase = $interfaceConnectDatabase;
    }


    public function ConnectDatabase(){

        return $this->interfaceConnectDatabase->ConnectDatabase();        

    }


}




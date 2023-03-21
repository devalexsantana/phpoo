<?php
namespace App\Controllers;

use App\Classes\UriClass;


class Method{

    private $uri;


    public function __construct(){
        $this->uri = new UriClass;

    }

    public function getMethod(){
        
        if(!$this->uri->emptyUri()){
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));
            return (isset($explodeUri[2])) ? $explodeUri[2] : DEFAULT_METHOD;
        }

        
        return DEFAULT_METHOD;
       
    }

    public function method($object){

        
                    
        if(method_exists($object,$this->getMethod())){

            return $this->getMethod();
        }

        return DEFAULT_METHOD;
    }
}
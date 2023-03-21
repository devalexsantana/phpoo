<?php

namespace App\Classes;
use App\Classes\UriClass;

class Parameters{

    private $uri;
    private $parameter;

    public function __construct(){
        $uri = new UriClass();
        $this->uri = $uri->getUri();
        
    }

    private function explodeParameters(){
        $explodeUri= explode('/', $this->uri);

        $this->parameter = array_filter($explodeUri);
    }

    public function getParameterMethod($object, $method){

        if(method_exists($object,$method)){

            $this->explodeParameters();

            if($method == 'index'){
                unset($this->parameter[1]);
                return isset($this->parameter[2]) ? array_values($this->parameter):NULL;
            }
            
            unset($this->parameter[1], $this->parameter[2]);
            return isset($this->parameter[3]) ? array_values($this->parameter):NULL;

        }

    }
}
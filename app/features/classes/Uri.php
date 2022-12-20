<?php

namespace app\features\classes;

use Exception;
 class Uri{


    private $uri;
    private const DEFAULT_CONTROLLER = 'home';
    
    public function uri(){
        return $this->getUri();

    }

    private function getUri(){
        $this->uri = $_SERVER["REQUEST_URI"];
        return $this->VerifyUri($this->uri);
    }

    private function VerifyUri($uri){
        if (!empty($uri)) {
            
            return $uri;
        }

        throw new Exception("A uri não pode ser fazia");
        
        
    }
 }
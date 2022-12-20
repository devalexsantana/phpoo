<?php
namespace app\core;

use Exception;

class CoreController{
    readonly string $uri;

    private const NAMESPACE_CONTROLLER = "app\\controllers\\";
    private const DEFAULT_CONTROLLER = "HomeController";

    public function __construct(string $uri){
        $this->uri = $uri;
    }


    private function GetControllerInUri() : string{        
        $explodeUri = array_filter(explode('/', $this->uri));

        if(empty($explodeUri[1]) ||  $explodeUri[1] == '/'){
            return self::DEFAULT_CONTROLLER;
        }
        return ucfirst($explodeUri[1]).'Controller'; 
        
    } 


    public function GetControllerInNameSpace() : string{
        

        if(class_exists(self::NAMESPACE_CONTROLLER.$this->GetControllerInUri())){
   
          return self::NAMESPACE_CONTROLLER.$this->GetControllerInUri();
        }
   
        return throw new Exception("Controller ". $this->GetControllerInUri() . " não encontrado");

     
        
    }
}
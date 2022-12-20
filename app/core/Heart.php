<?php
namespace app\core;

use app\features\classes\Uri;

class heart{


    readonly Object $uri;
    private Object $controller;
   

    public function pulse(){
        
        return  $this->Controller();
    }

    private function getUri():string{        
        $this->uri = new Uri();
        return $this->uri->uri();
    }


   private function Controller(){
        $this->controller = new CoreController($this->getUri());
        return  $this->controller->GetControllerInNameSpace();
   }


}
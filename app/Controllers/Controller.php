<?php

namespace App\Controllers;

use App\Classes\UriClass;

class Controller
{


    /**
     * Varivaeis que não vão ser alteradas
     * @var [Constanttes]
     */
    const NAMEESPACE_CONTROLLER = '\\App\\Controllers\\';
    const FOLDERS_CONTROLLER = ['Site', 'Admin'];
    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

    /**
     * Variavel privata da classe Controller
     *
     * @var [Obj]
     */
    private $uri;
    

    
    /**
     * method Construct instanciar a classe URICLass para usar em todo controller
     */
    public function __construct() {
        $this->uri = new UriClass();
    }

    /**
     * Method getController pegando o URI verificadno se nãop é vazio e retornando a parte que se trata do controller
     */
    public function getController(){

        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));

            return ucfirst($explodeUri[1]) . 'Controller';
        }

        return ucfirst(DEFAULT_CONTROLLER).'Controller';
    }

    /**
     * method Controller, verificar se a classe chamada na URI pegada no getController existe na pasta controller
     * caso não exita retorna a calsse de erro.
     */
     public function Controller(){

        $controller = $this->getController();       

        

        foreach(self::FOLDERS_CONTROLLER as $folderController){
                        
            if(class_exists(self::NAMEESPACE_CONTROLLER.$folderController.'\\'.$controller)){
                
                return self::NAMEESPACE_CONTROLLER.$folderController.'\\'.$controller;
            }

        }

        return self::ERROR_CONTROLLER;

     }

   
  
}

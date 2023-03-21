<?php
namespace App\Controllers;

Class BaseController{

    protected $twig;


    public function setTwig($twig){
        $this->twig = $twig;
    }
}
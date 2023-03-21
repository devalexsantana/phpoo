<?php
namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Repositories\ProductRepositories;

class HomeController extends BaseController{

    public function index(){
       
        $dados =[
            'titulo' => 'Coisas de TI',
            'nome' => 'Alex SAntana',
            'mensagem' => 'Hello Wold'
        ];

       $template = $this->twig->load('site_home.html');
       $template->display($dados);

       
    }
}
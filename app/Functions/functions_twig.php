<?php

use App\Repositories\ProductRepositories;

$site_url = new \Twig\TwigFunction('site_url', function(){


    return 'http://'.$_SERVER['SERVER_NAME'].':9000';

});


$produtos = new \Twig\TwigFunction('produtos', function(){
    $produtos = new ProductRepositories();
    return $produtos->ListarProduto();

});
<?php
namespace App\Repositories;

use App\Models\Site\Product;

class ProductRepositories{
  
  private $produto;

    public function __construct(){

        $this->produto = new Product();
        
    }


    public function ListarProduto(){
        $sql = "SELECT * FROM {$this->produto->table}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();

        return $this->produto->typeDatabase->fetchAll();
    }
}
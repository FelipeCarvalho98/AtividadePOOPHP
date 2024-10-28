<?php
 
 class Alimento extends Produto{
     public function __construct($nm,$prc,$qntd){
        parent::__construct();
        $this->nome = $nm;
        $this->preco = $prc;
        $this->quantidade = $qntd;

     }
 
    public function getAtributos(){
      return "Nome: $this->nome , Preço: $this->preco , Quantidade: $this->quantidade";
    }

   public static function getCategoria(){
    return  "Alimento";
  }
 }




?>
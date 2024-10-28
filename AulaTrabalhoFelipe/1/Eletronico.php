<?php
 class Eletronico extends Produto{
      
    public function __construct($nm,$prc,$qntd){
       parent::__construct();
        $this->nome = $nm;
        $this->preco = $prc;
        $this->quantidade = $qntd;
    }

   public static function getCategoria(){
    return "Eletronico";
   }

    public function getAtributos(){
        return  "Nome $this->nome, Preco $this->preco, Quantidade: $this->quantidade";
    
 }
 }


?>
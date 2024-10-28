<?php
 
 abstract class Produto{
     public $nome;
     public $preco;
     public $quantidade;

     public static $totalProdutos = 0;

     public function __construct(){
        self::$totalProdutos++;
     }

     public static function getTotalProdutos(){
        return self::$totalProdutos;
     }

     public abstract static  function getCategoria();
}   
 








?>
<?php
include_once 'Produto.php';
include_once 'Eletronico.php';
include_once 'Alimento.php';

$eletronico1 = new Eletronico("TV",8800,3);
$eletronico2 = new Eletronico("Microondas",1706,19);

echo $eletronico1->getAtributos();
echo "Categoria :" . Eletronico::getCategoria();
echo "<BR><BR>";
echo $eletronico2->getAtributos();
echo "Categoria :" . Eletronico::getCategoria();
echo "<BR><BR>";

$alimento1 = new Alimento("feijao",70,50);
$alimento2 = new Alimento("Arroz",70,50);
echo $alimento1->getAtributos();
echo "Categoria :" . Alimento::GetCategoria();
echo "<br><br>";
echo $alimento2->getAtributos();
echo "Categoria :" . Alimento::getCategoria();
echo "<BR><BR>";
echo "Total produtos criados :" . Produto::getTotalProdutos();
?>
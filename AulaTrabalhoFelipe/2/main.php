<?php

include_once 'pagamentoSistema/Pagamentos.php';
include_once 'pagamentoSistema/Boleto.php';
include_once 'pagamentoSistema/CartaoCredito.php';

use PagamentoSistema\CartaoCredito;
use PagamentoSistema\Boleto;

$pag1 = new CartaoCredito;
$pag2 = new CartaoCredito;
$pag3 = new Boleto;
$pag4 = new Boleto;

echo $pag1->processarPagamento(900);
echo "<BR><BR>";
echo $pag2->processarPagamento(950);
echo "<BR><BR>";
echo $pag3->processarPagamento(450);
echo "<BR><BR>";
echo $pag4->processarPagamento(470);
echo "<BR><BR>";

?>
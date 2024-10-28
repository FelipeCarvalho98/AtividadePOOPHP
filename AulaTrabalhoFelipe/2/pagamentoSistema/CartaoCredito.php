<?php
namespace PagamentoSistema;
  class CartaoCredito implements Pagamento{
    public function processarPagamento($valor){
        return "Pagamento de R$$valor via Cartão de Crédito processado com sucesso";
    }
 }
?>
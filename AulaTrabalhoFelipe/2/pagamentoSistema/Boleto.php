<?php
 namespace PagamentoSistema;
class Boleto implements Pagamento{
  public function processarPagamento($valor){
    return "O pagamento de R$$valor por meio do boleto foi realizado com sucesso!";
 }
}

?>
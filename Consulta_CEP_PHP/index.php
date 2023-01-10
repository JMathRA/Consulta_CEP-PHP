<?php

require __DIR__.'/vendor//autoload.php';

use \App\WebService\ViaCep;

//verifica a existencia do cep no comando
if(!isset($argv[1])){
  die("CEP não definido");
}

//executa a consulta de CEPs
$dadosCEP = ViaCep::consultarCEP($argv[1]);

//imprime o resultado
print_r($dadosCEP);
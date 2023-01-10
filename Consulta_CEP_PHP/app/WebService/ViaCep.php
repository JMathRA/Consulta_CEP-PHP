<?php
namespace App\WebService;

class ViaCep{

  /**
   * Metodo responsavel por consultar um cep no ViaCEP
   */
  public static function consultarCEP($cep){
    //inicia o curl
    $curl = curl_init();

    //configuracoes do curl
    curl_setopt_array($curl,[
      CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    //response
    $response = curl_exec($curl);

    //fecha a conexao aberta
    curl_close($curl);

    //converte JSON para array

    $array = json_decode($response,true);

    //retornar conteudo em array

    return isset($array['cep']) ? $array : null;

  }
}
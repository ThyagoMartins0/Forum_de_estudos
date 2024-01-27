<div class = "titulo"> Array Multidimencional</div>

<?php
$dados = [
[
    "nome"=> "marcelo",
    "idade"=> 25,
    "naturalidade" => "BR"
  ],
  "pessoal02" => [
    "nome"=> "PEDRO",
    "idade"=> 65,
    "naturalidade" => "EUA"
  ]
  ];

  print_r($dados);
  echo '<br>' . $dados ["pessoal02"]["idade"];
  echo '<br>' . $dados [0]["idade"];
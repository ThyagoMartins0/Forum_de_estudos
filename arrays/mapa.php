<div class="titulo">Mapa </div>

<?php
$dados = array(
    "idade"=> 14,
    "cor"=> "laranja",
    "peso"=> 45.8
);

print_r($dados);

var_dump($dados[0]);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];


echo '<br>';
print_r($lista);

$lista[]  = 'i';
echo '<br>';
print_r($lista);


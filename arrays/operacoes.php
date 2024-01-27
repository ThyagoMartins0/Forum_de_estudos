<div class="titulo" > Operações </div> 


<?php

$dados =[
"nome" => "jose",
"idade" => 28

];

$dados1 =[
        "naturalidade" => "fortaleza"

];

$dadoscompletos = $dados + $dados1;
print_r($dadoscompletos);

echo '<br>' . is_array($dadoscompletos);

 echo '<br>';
 echo  $indice = array_rand($dadoscompletos);
 echo '<br>';
 echo "$indice = $dadoscompletos[$indice]";
 echo '<br>';
 echo "{$dadoscompletos['idade']}";
 echo '<br>';
 echo "${dadoscompletos['idade']}";
 echo '<br>';
 unset($dadoscompletos["nome"]);
 echo '<br>';
 print_r($dadoscompletos);

 $impar =[1,3,5,7,9];
 $pares = [0,2,4,6,8];

 $decimais =$pares + $impar;
 echo "<br>";
 print_r($decimais);

 $decimais = array_merge ( $pares, $impar);
 echo "<br>";
 print_r ($decimais);

 sort ($decimais);
 echo "<br>";
 print_r ($decimais);


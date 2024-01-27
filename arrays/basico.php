<div class="titulo">Arrays </div>


<?php
$lista = array(1,1.5,"oi");
echo $lista . "<br>";
var_dump ($lista);
echo '<br>';
print_r($lista);


echo '<br>'. $lista[0];
echo '<br>'. $lista[1];
echo '<br>'. $lista[2];
var_dump($lista[3000]);

$texto = 'esse texto é brabo';
echo '<br>' . $texto[17];
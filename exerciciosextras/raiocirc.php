<div class="titulo">CALCULO DE CIRCUNFERENCIA</div>

<!--Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
Para saber o valor do pi, use: M_PI (ele armazena o valor de pi) -->

<form action = "#" method="post">
    INFORME O VALOR DO RAIO <input type="text" name="raio">
    
    
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$raio = $_POST['raio'] ;
$perimetro =  2* M_PI * $raio;
$area = M_PI * $raio*$raio;

echo "O valor do raio é $raio </br>";

echo "O valor do perimetro é $perimetro </br>";

echo "O valor da area é $area</br>";


?>

proximo exercicio - calculo com if else
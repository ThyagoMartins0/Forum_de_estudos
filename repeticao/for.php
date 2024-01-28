<div class ="titulo" > LAÇO FOR </div> 

<?php

for($i = 1 ; $i <=5; $i++)
{
    echo "$i<br> ";
}

echo "<hr>";

for (; $i <=10; $i++){
    echo "$i <br>";
}

echo "<hr>";

for (; $i <=15;){
    echo "$i <br> ";
    $i++;
}

$array = [
    1=> 'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sabado',
        'Domingo'
];


<div class= "titulo"> DESAFIO SORTEIO</div>

<?php
$personagens = ["mario","kiko","chaves","rapunzel"];

$index = array_rand($personagens);

echo "<h1>$personagens[$index]</h1>";
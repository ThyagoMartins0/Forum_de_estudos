<div class="titulo"> Calculadora </div>

<form action="#" method="post" >
<input type="text" name="num">

    <select name="calculadora" id="calculadora">
        <option value=""> </option>
        <option value="somar">+</option>
        <option value="subtrair">-</option>
        <option value="multiplicar">X</option>
        <option value="subtração">/</option> 
    </select>
    <input type="text" name="num02">
    <button>CALCULAR </button>
</form>


<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php

$num = $_POST['num'];

$num02 = $_POST['num02'];

switch ($_POST["calculadora"]){
    case 'soma':
        $SOMAR = $num + $num02;
        $resposta = " O valor desta soma é $SOMAR";
        break;
    case 'subtrair':
        $SUB = $num - $num02;
        $resposta = " O valor desta soma é $SUB";
        break;
        
    case 'multiplicar':
        $mult = $num * $num02;
        $resposta = " O valor desta soma é $mult";
        break;

    case 'subtração':
        $div = $num / $num02;
       $resposta = " O valor desta soma é $div";
       break;

}

echo "<p> $resposta<p>";

?>
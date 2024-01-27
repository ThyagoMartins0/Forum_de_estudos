<div class="titulo">VEJA O NUMERO</div>

<!--Faça um script que peça um número e então mostre a mensagem O número informado foi [número].-->

<form action='#' method = "post">
    INFORME UM NUMERO QUALQUER <input class="text" name="num">
    
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
$num = $_POST['num'];


echo "O numero selecionado foi :$num " ;

<?php

// Função para ler os dados do arquivo
function lerDados() {
    $dados = file_get_contents('dados.txt');
    return json_decode($dados, true) ?: [];
}

// Função para escrever os dados no arquivo
function escreverDados($dados) {
    file_put_contents('dados.txt', json_encode($dados));
}

// Inicializa os dados
$dados = lerDados();

// Adiciona um novo registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];

    $novoRegistro = array("name" => $name, "lastname" => $lastname);

    $dados[] = $novoRegistro;
    escreverDados($dados);
}

// Exibe os registros
foreach ($dados as $registro) {
    echo "Name: " . $registro["name"] . " - Lastname: " . $registro["lastname"] . "<br>";
}

?>

<!-- Formulário para adicionar novos registros -->
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" required>
    <br>
    <input type="submit" name="submit" value="Adicionar Registro">
</form>

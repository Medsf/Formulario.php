<?php
include('conexao.php');

$nome = $_POST["nomeCompleto"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];
$cpf = $_POST["cpf"];
$dataDeNascimento = $_POST["dataDeNascimento"];
$genero = $_POST["genero"];
$telefone = $_POST["telefone"];
$uf = $_POST["uf"];
$cidade = $_POST["cidade"];
$logradouro = $_POST["Logradouro"];
$numeroDaCasa = $_POST["numero"];
$complemento = $_POST["complemento"];

$cadastrar = "INSERT INTO usuario (nome, email, senha, usuario, genero, dataDeNascimento, cpf, telefone, uf, cidade, logradouro, numeroDaCasa, complemento) VALUES ('$nome', '$email', '$senha', '$usuario', '$cpf', '$dataDeNascimento', '$genero', '$telefone', '$uf', '$cidade', '$logradouro', '$numeroDaCasa', '$complemento')";

if(mysqli_query($conn, $cadastrar)){
    echo "<h1>Novo cadastro realizado</h1><br>";
}else{
    echo "ERROR: " . $cadastrar . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
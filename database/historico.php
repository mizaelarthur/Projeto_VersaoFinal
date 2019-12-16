<?php
session_start();
include("conexao.php");


$nome = mysqli_real_escape_string($conexao, trim($_POST["n_usuario"]));
echo($nome);
$CPF = mysqli_real_escape_string($conexao, trim($_POST["cpf_usuario"]));
echo($CPF);
$nome_animal = mysqli_real_escape_string($conexao, trim($_POST["n_animal"]));
echo($nome_animal);



$sql = "INSERT INTO adocao (nome, cpf, nome_anim) VALUES ('{$nome}', '{$CPF}', '{$nome_animal}')";


if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	echo ('deu certo');
}

$conexao->close();

header('Location: ../resources/inicio.php');
exit;





?>
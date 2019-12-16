<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['txtNome']));
$raca = mysqli_real_escape_string($conexao, trim($_POST['txtRaça']));
$porte = mysqli_real_escape_string($conexao, trim($_POST['opPorte']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['opSexo']));
$idade = mysqli_real_escape_string($conexao, trim($_POST['opIdade']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['txtObs']));

$sql = "INSERT INTO animal (nome_animal, porte_animal, idade_animal, raca_animal, sexo_animal, descricao_animal) VALUES ('{$nome}', '{$porte}', '{$idade}', '{$raca}', '{$sexo}', '{$descricao}')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	
	header('Location: ../resources/inicio.php');
}

$conexao->close();

//
exit;
?>
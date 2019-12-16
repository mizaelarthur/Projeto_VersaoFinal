<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
$pagamento = mysqli_real_escape_string($conexao, trim($_POST['forma']));


$inserir_tabela = "INSERT INTO doacao (nome_doador, cpf_doador, cidade_doador, valor_doacao, forma_pagamento) VALUES ('{$nome}', '{$cpf}', '{$cidade}', '{$valor}', '{$pagamento}')";

if($conexao->query($inserir_tabela) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	echo ('deu certo');
	
}

$conexao->close();

header('Location: ../resources/doacao.php');
exit;

?>
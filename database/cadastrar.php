<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome_cadastro']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['email_cadastro']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha_cadastro']));

$sql = "SELECT count(*) as total FROM usuario WHERE email_usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../resources/cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('$nome', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../resources/cadastro.php');
exit;
?>
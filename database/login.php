<?php
session_start();
include('conexao.php');

if(empty($_POST['email_login']) || empty($_POST['senha_login'])) {
	header('Location: ../resources/cadastro.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);

$query = "SELECT email_usuario, senha_usuario FROM usuario WHERE email_usuario = '{$usuario}' and senha_usuario = '{$senha}'";

//echo $query;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email_login'] = $usuario;
	header('Location: ../resources/inicio.php');
	exit();
} else {
	header('Location: index.php');
	exit();
}
?>
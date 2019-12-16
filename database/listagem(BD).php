<?php
session_start();
include("conexao.php");


$



$sql = "INSERT INTO adocao (nome, cpf, nome_anim) VALUES ('{$nome}', '{$CPF}', '{$nome_animal}')";


if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	echo ('deu certo');
}

$conexao->close();

header('Location: ../resources/inicio.php');
exit;





?>
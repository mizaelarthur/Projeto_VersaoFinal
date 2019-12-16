<?php
session_start();
include("conexao.php");




$nome = mysqli_real_escape_string($conexao, trim($_POST['txtNome']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['txtTipo']));
$local = mysqli_real_escape_string($conexao, trim($_POST['txtLocal']));
$hr = mysqli_real_escape_string($conexao, trim($_POST['txtHR']));

$descricao = mysqli_real_escape_string($conexao, trim($_POST['txtObs']));




$sql = "INSERT INTO eventos (nome_evento, tipo_evento, local_evento, hora_evento, descricao_evento) VALUES ('{$nome}', '{$tipo}', '{$local}', '{$hr}', '{$descricao}')";

if(mysqli_query($conexao, $sql)){
	header('Location: ../resources/evento.php');

}else{
	echo $conexao->error;
}

/*if($conexao->query($sql) === TRUE) {
	echo "deu certo";
	$_SESSION['status_cadastro'] = true;
	echo($sql);
	//header('Location: ../resources/evento.php');
}
else{
	echo $conexao->error;
}
*/


$conexao->close();


//echo($sql);

exit;
?>
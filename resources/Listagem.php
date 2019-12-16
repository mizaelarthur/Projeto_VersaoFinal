<?php
session_start();

include("../database/conexao.php");

$dado = "SELEC * FROM animal";
$conexao = $mysql->query($dado) or die($mysql->error);
 
?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<link rel="stylesheet" type="text/css" href="css/style(evento).css">
	<meta charset="utf-8">
	<title>Confirmar Adoção</title>
</head>
<body>


 <div id= "menu">
            <ul>
                <li><a href ="../index.php">Início</a></li>
                <li><a href ="doacao.php">Quero Ajudar</a></li>
                <li><a href ="adocao.php">Quero Adotar</a></li>
                


            </ul>
            
        </div>

        <center>
        <img id="img" src="images/log.png">
</center>
 
 <form action="../database/historico.php" class="form" method="POST">
 <fieldset>
 	<section>
<center>
 <legend class="cd">Animais Cadastrados</legend>
 <br></center>

  <table border="1">
      <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Porte</td>
          <td>Idade</td>
          <td>Raça</td>
          <td>Sexo</td>
          <td>Descrição</td>



      </tr>
      <?php while($armazena = $conexao->fetch_array()) {  ?>
      <tr>
          <td><?php echo $armazena["idanimal"]; ?></td>
          <td><?php echo $armazena["nome_animal"]; ?></td>
          <td><?php echo $armazena["porte_animal"]; ?></td>
          <td><?php echo $armazena["idade_animal"]; ?></td>
          <td><?php echo $armazena["raca_animal"]; ?></td>
          <td><?php echo $armazena["sexo_animal"]; ?></td>
          <td><?php echo $armazena["descricao_animal"]; ?></td>



      </tr>
      <?php } ?>






  </table>



 </section>
 </fieldset>
 </form>
 <footer>
 	<div class="rede-social">

    <ul class="list-rede-social">
                        <a  class="link-rede-social" href="https://pt-br.facebook.com/">
                            <li class="item-rede-social-um">
                            <img src="logos/imgf.png" id="face" >
                              
                            </li>
                        </a>
                        <a class="link-rede-social" href="https://www.whatsapp.com/">
                            <li class="item-rede-social-dois">
                              <img src="logos/imgw.png" id="zap" >
                              
                            </li>
                        </a>
                        <a class="link-rede-social" href="https://gmail.com/mail/help/intl/pt_pt/about.html">
                            <li  class="item-rede-social-três">
                                <img src="logos/imgt.png" id="twiter" >
                             </li>
                        </a>
                        <a  class="link-rede-social" href="https://www.instagram.com/?hl=pt-br">
                            <li class="item-rede-social-quatro">
                               <img src="logos/imgi.png" id="insta" >
                              
                            </li>
                        </a>
                    </ul>

   </div>
 </footer>
 </body>
</html>
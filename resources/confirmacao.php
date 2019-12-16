<?php
session_start();


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
                <li><a href ="inicio.php">Início</a></li>
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
 <legend class="cd">Confirmar Adoção</legend>
 <br></center>

<label for="">Nome:</label>
<input type="text" name="n_usuario" id="inputNome">
<label for="">CPF:</label>
<input type="text" name="cpf_usuario" id="inputNome"><br><br>

<br>
 <label for="">Nome do Animal:</label>
<input type="text" name="n_animal" id="inputNome">
<br><br>


    


 <button type="submit">
 <img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/
128x128/actions/button_ok.png" width="23" heigth="28" align="absmiddle"
alt="Salvar">
 Salvar
 </button>

 <button type="reset">
 <img src="http://images.all-free-download.com/images/graphiclarge/
not_ok_mark_clip_art_9056.jpg" width="23" heigth="28" align="absmiddle"
alt="Cancelar">
 Cancelar
 </button>
 

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
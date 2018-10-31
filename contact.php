<?php
  include "libs/funcao.php";
  if(strlen($_POST['nome'])) {
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 'Formulário de contato')) {
      echo "Sua mensagem foi enviada com sucesso!";
    } else {
      echo "Ocorreu um erro ao enviar";
    }
      echo "<br><a href='index.php'>Voltar</a>";
      exit();
  }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Madomo Planet | Music</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="..." />
  <meta name="robots" content="..." />
  <meta name="keywords" content="...." />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="icon" href="#" type="image/x-icon" />
  <link rel="shortcut icon" href="#" type="image/x-icon" />  
  
  <meta name="theme-color" content="#000">
  <meta name="msapplication-navbutton-color" content="#000">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  
  <!-- <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" /> -->
</head>


<body>
	<h1 class="white">Formulário de contato</h1>
	
    <form method="post" id="formulario_contato" onsubmit="validaForm(); return false;" class="form">
		<p class="name">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
		
		<p class="email">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
		</p>		
	
		<p class="text">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
		</p>
		
		<p class="submit">
            <input type="submit" value="Enviar" />
		</p>
	</form>
    
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    
    <script type="text/javascript">
      function validaForm() {
        erro = false;
        if($('#nome').val() == '') {
          alert('Você precisa preencher o campo Nome');erro = true;
        }
        if($('#email').val() == '' && !erro) {
          alert('Você precisa preencher o campo E-mail');erro = true;
        }
        if($('#mensagem').val() == '' && !erro) {
          alert('Você precisa preencher o campo Mensagem');erro = true;
        }
        
        if(!erro) { $('#formulario_contato').submit(); }
      }
    </script>
</body>
</html>
<?php

  /* 
  include "libs/funcao.php";
  if(strlen($_POST['nome'])) {
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 'Formulário de Contato - Site')) {
      echo "Sua mensagem foi enviada com sucesso!";
    } else {
      echo "Ocorreu um erro ao enviar";
    }
      echo "<br><a href='index.php'>Voltar</a>";
      exit();
  }
  */
  
?>

<?php require_once('language/load_language.php'); ?>

<!DOCTYPE html>
<html>

  <?php include('blocks/head.php') ?>

  <body class="contact-page">
    
    <?php include('blocks/navbar.php'); ?>
    
    <section class="container">
      <div class="row formContact">
        <h1 class="title-section">Formulário de Contato</h1>
        <form class="col s12" id="formulario_contato">
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="name" type="text" />
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s12 m6">
              <input id="email" type="email" />
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="message" class="materialize-textarea"></textarea>
              <label for="message">Digite sua mensagem...</label>            
            </div>
          </div>
          <div class="row boxBtn">
            <input type="submit" value="Enviar" class="btn"/>
          </div>
        </form>
      </div>
      
    </section>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
  
  </body>
</html>
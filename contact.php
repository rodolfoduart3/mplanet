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
        <form id="form_contact" method="post" action="libs/sendForm.php" class="col s12">
          <div class="row">
            <div class="input-field col s12 m6">
              <input type="text" name="name" required />
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s12 m6">
              <input type="email" name="email" required />
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea name="message" class="materialize-textarea" required></textarea>
              <label for="message">Digite sua mensagem...</label>            
            </div>
          </div>
          <div class="row boxBtn">
            <input type="submit" value="Enviar" class="btn"/>
          </div>
        </form>
        <div class="boxLoading">
          <img src="img/loading.gif" class="loadingImg" alt="Processando formulário">
        </div>
        <div class="showMessage"></div>
      </div>
      
    </section>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
  
  </body>
</html>
<?php
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
        <form class="col s12" id="formulario_contato" onsubmit="submitFormContact(); return false;">
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="nome" placeholder="" type="text" class="validate">
              <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12 m6">
              <input id="email" class="validate" type="email" placeholder="" />
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="mensagem" class="materialize-textarea validate"></textarea>
              <label for="mensagem">Digite sua mensagem...</label>            
            </div>
          </div>
          <div class="row boxBtn">
            <input type="submit" value="Enviar" class="btn"/>
          </div>
        </form>
      </div>
      
    </section>
    

  	<?php /* 
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
    */ ?>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
    <script type="text/javascript">

      function submitFormContact() {
        $("#formulario_contato").submit(function () {
          // if ($(".nome").val() == "" && $(".email").val() == "") {
          if ($(".nome").val() == "") {
            alert("Preencha os campos corretamente!");
          }
        });
      }
    
      // function validaForm() {
      // 
      //   // erro = false;
      //   // if($('#nome').val() == '') {
      //   //   alert('Você precisa preencher o campo Nome');erro = true;
      //   // }
      //   // if($('#email').val() == '' && !erro) {
      //   //   alert('Você precisa preencher o campo E-mail');erro = true;
      //   // }
      //   // if($('#mensagem').val() == '' && !erro) {
      //   //   alert('Você precisa preencher o campo Mensagem');erro = true;
      //   // }
      //   // 
      //   // if(!erro) { $('#formulario_contato').submit(); }
      // }
    </script>
  
  </body>
</html>